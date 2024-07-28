<?php

namespace App\Http\Services;

use App\Models\Course;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class CourseService
{
    private $resource_name = 'Cours';

    public function add($data)
    {
        $validator = Validator::make($data, Course::$rules);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }

        $course = Course::create($data);
        return respJson(200, "Créaction éffectuée", $course);
    }

    public function show($course)
    {
        if (empty($course)) {
            return notFound("$this->resource_name introuvable");
        }
        return respJson(Response::HTTP_OK, $this->resource_name, $course);
    }

    public function update($data, $course)
    {
        if (empty($course)) {
            return notFound("$this->resource_name introuvable");
        }

        $course->update($data);
        return respJson(200, 'Mise à jour éffectuée', $course);
    }

    public function delete($course)
    {
        if (empty($course)) {
            return notFound("$this->resource_name introuvable");
        }

        $course->delete();
        return respJson(Response::HTTP_NO_CONTENT, 'Suppression éffectuée', $course);
    }

    public function  all()
    {
        $courses = Course::orderBy('created_at', 'DESC')->get();
        return respJson(Response::HTTP_OK, "Liste $this->resource_name", $courses);
    }
}
