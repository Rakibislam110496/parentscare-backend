<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePatientGuideRequest;
use App\Http\Requests\UpdatePatientGuideRequest;
use App\Models\PatientGuide;
use Illuminate\Http\JsonResponse;

class PatientGuideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $patientGuides = PatientGuide::simplePaginate(20);

        return response()->json($patientGuides);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StorePatientGuideRequest  $request
     * @return JsonResponse
     */
    public function store(StorePatientGuideRequest $request): JsonResponse
    {
        $this->authorize('create', PatientGuide::class);

        $validated = $request->validated();

        $patientGuide = PatientGuide::create($validated);

        return response()->json($patientGuide);
    }

    /**
     * Display the specified resource.
     *
     * @param PatientGuide $patientGuide
     * @return JsonResponse
     */
    public function show(PatientGuide $patientGuide): JsonResponse
    {
        return response()->json($patientGuide);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdatePatientGuideRequest  $request
     * @param int $id
     * @return JsonResponse
     */
    public function update(UpdatePatientGuideRequest $request, PatientGuide $patient_guide): JsonResponse
    {
        $this->authorize('update', $patient_guide);

        $validated = $request->validated();

        $patient_guide->update($validated);

        return response()->json($patient_guide);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param PatientGuide $patientGuide
     * @return \Illuminate\Http\Response
     */
    public function destroy(PatientGuide $patientGuide)
    {
        $this->authorize('delete', $patientGuide);

        PhotoController::delete($patientGuide->photo);

        $patientGuide->delete();

        return response()->json(['message'=>'Patient Guide Deleted.']);
    }
}
