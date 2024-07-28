<?php

namespace App\Http\Controllers;

use App\Http\Services\QuizService;
use App\Models\Quiz;
use Exception;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function __construct(
        private QuizService $quizService
    ) {
    }

    public function index()
    {
        return $this->quizService->all();
    }

    public function store(Request $request)
    {
        return $this->quizService->add($request->all());
    }

    public function show(Quiz $quiz)
    {
        try {
            return $this->quizService->show($quiz);
        } catch (Exception $e) {
            return notFound();
        }
    }

    public function update(Request $request, Quiz $quiz)
    {
        return $this->quizService->update($request->all(), $quiz);
    }

    public function destroy(Quiz $quiz)
    {
        return $this->quizService->delete($quiz);
    }
}
