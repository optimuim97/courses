<?php

namespace App\Http\Services;

use App\Models\QuestionChoice;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class ChoiceService
{
    private $resource_name = 'Choix';

    public function add($data)
    {
        $validator = Validator::make($data, QuestionChoice::$rules);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }

        $questionChoice = QuestionChoice::create($data);
        dd($questionChoice);

        return respJson(200, "Créaction éffectuée", $questionChoice);
    }

    public function show($questionChoice)
    {
        if (empty($questionChoice)) {
            return notFound("$this->resource_name introuvable");
        }
        return respJson(Response::HTTP_OK, $this->resource_name, $questionChoice);
    }

    public function update($data, $questionChoice)
    {
        if (empty($questionChoice)) {
            return notFound("$this->resource_name introuvable");
        }

        $questionChoice->update($data);
        return respJson(200, 'Mise à jour éffectuée', $questionChoice);
    }

    public function delete($questionChoice)
    {
        if (empty($questionChoice)) {
            return notFound("$this->resource_name introuvable");
        }

        $questionChoice->delete();
        return respJson(Response::HTTP_NO_CONTENT, 'Suppression éffectuée', $questionChoice);
    }

    public function  all()
    {
        $courses = QuestionChoice::orderBy('created_at', 'DESC')->get();
        return respJson(Response::HTTP_OK, "Liste $this->resource_name", $courses);
    }
}
