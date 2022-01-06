<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePatientGuideAppointmentRequest;
use App\Models\PatientGuideAppointment;
use Illuminate\Http\Request;

class PatientGuideAppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments = PatientGuideAppointment::paginate(20);

        return response()->json($appointments);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PatientGuideAppointment  $patientGuideAppointment
     * @return \Illuminate\Http\Response
     */
    public function show(PatientGuideAppointment $patientGuideAppointment)
    {
        return response()->json($patientGuideAppointment);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PatientGuideAppointment  $patientGuideAppointment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePatientGuideAppointmentRequest $request, PatientGuideAppointment $patientGuideAppointment)
    {
        $validated = $request->validated();

        $patientGuideAppointment->update($validated);

        return response()->json($patientGuideAppointment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PatientGuideAppointment  $patientGuideAppointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(PatientGuideAppointment $patientGuideAppointment)
    {
        //
    }
}
