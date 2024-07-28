<?php

namespace App\Http\Controllers;

use App\Http\Services\QuestionService;
use App\Models\Question;
use Exception;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function __construct(private QuestionService $questionService)
    {
    }

    public function index()
    {
        return $this->questionService->all();
    }

    public function store(Request $request)
    {
        return $this->questionService->add($request->all());
    }

    public function show(Question $course)
    {
        try {
            return $this->questionService->show($course);
        } catch (Exception $e) {
            return notFound();
        }
    }

    public function update(Request $request, Question $course)
    {
        return $this->questionService->update($request->all(), $course);
    }

    public function destroy(Question $course)
    {
        return $this->questionService->delete($course);
    }
}
