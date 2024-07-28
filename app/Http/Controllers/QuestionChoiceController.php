<?php

namespace App\Http\Controllers;

use App\Http\Services\ChoiceService;
use App\Models\QuestionChoice;
use Exception;
use Illuminate\Http\Request;

class QuestionChoiceController extends Controller
{
    public function __construct(private ChoiceService $choiceService)
    {
    }

    public function index()
    {
        return $this->choiceService->all();
    }

    public function store(Request $request)
    {
        return $this->choiceService->add($request->all());
    }

    public function show(QuestionChoice $questionChoice)
    {
        try {
            return $this->choiceService->show($questionChoice);
        } catch (Exception $e) {
            return notFound();
        }
    }

    public function update(Request $request, QuestionChoice $questionChoice)
    {
        return $this->choiceService->update($request->all(), $questionChoice);
    }

    public function destroy(QuestionChoice $questionChoice)
    {
        return $this->choiceService->delete($questionChoice);
    }
}
