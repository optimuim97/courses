<?php

namespace App\Http\Services;

use App\Models\Speciality;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class SpecialityService
{
    private $resource_name = 'Spécialité';

    public function add($data)
    {
        $validator = Validator::make($data, Speciality::$rules);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }

        $specialty = Speciality::create($data);
        return respJson(200, "Créaction éffectuée", $specialty);
    }

    public function show($specialty)
    {
        if (empty($specialty)) {
            return notFound("$this->resource_name introuvable");
        }
        return respJson(Response::HTTP_OK, $this->resource_name, $specialty);
    }

    public function update($data, $specialty)
    {
        if (empty($specialty)) {
            return notFound("$this->resource_name introuvable");
        }

        $specialty->update($data);
        return respJson(200, 'Mise à jour', $specialty);
    }

    public function delete($specialty)
    {
        if (empty($specialty)) {
            return notFound("Leçon introuvable");
        }

        $specialty->delete();
        return respJson(Response::HTTP_NO_CONTENT, 'Delete', $specialty);
    }

    public function  all()
    {
        $specialtys = Speciality::orderBy('created_at', 'DESC')->get();
        return respJson(Response::HTTP_OK, 'Specialities', $specialtys);
    }
}
