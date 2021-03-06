<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePatientGuideRequest;
use App\Http\Requests\UpdatePatientGuideRequest;
use App\Models\PatientGuide;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PatientGuideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(Request $request): JsonResponse
    {
        $patientGuides = new PatientGuide();

        if($request->has('name')){
            $patientGuides = $patientGuides->where('name', 'LIKE', "%{$request->name}%");
        }

        if(isAdmin())
            $patientGuides = $patientGuides->with('ongoingAppointments');

        $patientGuides = $patientGuides->paginate(20);

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
        $validated = $request->validated();

        $validated['password'] = Hash::make(Str::random(6));

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
        if(isAdmin())
            $patientGuide->load('appointments');

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
        $validated = $request->validated();

        if($request->has('password')){
            $validated['password'] = Hash::make($request->password);
        }

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
        PhotoController::delete($patientGuide->photo);

        $patientGuide->delete();

        return response()->json(['message'=>'Patient Guide Deleted.']);
    }
}
