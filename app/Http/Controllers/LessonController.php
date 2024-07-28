<?php

namespace App\Http\Controllers;

use App\Http\Services\LessonService;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{

    public function __construct(
        private LessonService $lessonService
    ) {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->lessonService->all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->lessonService->add($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Lesson $lesson)
    {
        return $this->lessonService->show($lesson);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lesson $lesson)
    {
        return $this->lessonService->update($request->all(), $lesson);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lesson $lesson)
    {
        return $this->lessonService->delete($lesson);
    }
}
