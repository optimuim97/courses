<?php

namespace App\Http\Services;

use App\Models\Lesson;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class LessonService
{
    private $resource_name = 'Leçon';

    public function add($data)
    {
        $validator = Validator::make($data, Lesson::$rules);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }

        $lesson = Lesson::create($data);
        return respJson(200, "Créaction éffectuée", $lesson);
    }

    public function show($lesson)
    {
        if (empty($lesson)) {
            return notFound("$this->resource_name introuvable");
        }
        return respJson(Response::HTTP_OK, $this->resource_name, $lesson);
    }

    public function update($data, $lesson)
    {
        if (empty($lesson)) {
            return notFound("$this->resource_name introuvable");
        }

        $lesson->update($data);
        return respJson(200, 'Mise à jour éffectué', $lesson);
    }

    public function delete($lesson)
    {
        if (empty($lesson)) {
            return notFound("$this->resource_name introuvable");
        }

        $lesson->delete();
        return respJson(Response::HTTP_NO_CONTENT, 'Suppression éffectué', $lesson);
    }

    public function  all()
    {
        $lessons = Lesson::orderBy('created_at', 'DESC')->get();
        return respJson(Response::HTTP_OK, "Liste $this->resource_name", $lessons);
    }
}
