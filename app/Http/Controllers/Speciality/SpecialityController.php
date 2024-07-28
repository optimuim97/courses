<?php

namespace App\Http\Controllers\Speciality;

use App\Http\Controllers\Controller;
use App\Http\Services\SpecialityService;
use App\Models\Speciality;
use Illuminate\Http\Request;

class SpecialityController extends Controller
{
    public function __construct(private SpecialityService $specialityService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->specialityService->all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->specialityService->add($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Speciality $speciality)
    {
        return $this->specialityService->show($speciality);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Speciality $speciality)
    {
        return $this->specialityService->update($request->all(), $speciality);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Speciality $speciality)
    {
        return $this->specialityService->delete($speciality);
    }
}
