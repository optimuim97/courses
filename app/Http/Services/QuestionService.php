<?php

namespace App\Http\Services;

use App\Models\Question;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class QuestionService
{

    private $resource_name = 'Question';

    public function add($data)
    {
        $validator = Validator::make($data, Question::$rules);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }

        $question = Question::create($data);
        return respJson(200, "Créaction éffectuée", $question);
    }

    public function show($question)
    {
        if (empty($question)) {
            return notFound("$this->resource_name introuvable");
        }
        return respJson(Response::HTTP_OK, $this->resource_name, $question);
    }

    public function update($data, $question)
    {
        if (empty($question)) {
            return notFound("$this->resource_name introuvable");
        }

        $question->update($data);
        return respJson(200, 'Mise à jour éffectué', $question);
    }

    public function delete($question)
    {
        if (empty($question)) {
            return notFound("$this->resource_name introuvable");
        }

        $question->delete();
        return respJson(Response::HTTP_NO_CONTENT, 'Suppression éffectué', $question);
    }

    public function  all()
    {
        $lessons = Question::orderBy('created_at', 'DESC')->get();
        return respJson(Response::HTTP_OK, "Liste $this->resource_name", $lessons);
    }

}
