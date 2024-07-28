<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use App\Http\Services\CourseService;
use App\Models\Course;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
    public function __construct(private CourseService $courseService)
    {
    }

    public function index()
    {
        return $this->courseService->all();
    }

    public function store(Request $request)
    {
        return $this->courseService->add($request->all());
    }

    public function show(Course $course)
    {
        try {
            return $this->courseService->show($course);
        } catch (Exception $e) {
            return notFound();
        }
    }

    public function update(Request $request, Course $course)
    {
        return $this->courseService->update($request->all(), $course);
    }

    public function destroy(Course $course)
    {
        return $this->courseService->delete($course);
    }
}
