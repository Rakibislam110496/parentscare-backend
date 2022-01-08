<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateTherapistAppointmentRequest;
use App\Models\TherapistAppointment;
use Illuminate\Http\Request;

class TherapistAppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments = TherapistAppointment::with('user', 'therapist')->paginate(20);

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
     * @param  \App\Models\TherapistAppointment  $therapistAppointment
     * @return \Illuminate\Http\Response
     */
    public function show(TherapistAppointment $therapistAppointment)
    {
        return response()->json($therapistAppointment->load('user', 'therapist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TherapistAppointment  $therapistAppointment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTherapistAppointmentRequest $request, TherapistAppointment $therapistAppointment)
    {
        $validated = $request->validated();

        $therapistAppointment->update($validated);

        return response()->json($therapistAppointment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TherapistAppointment  $therapistAppointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(TherapistAppointment $therapistAppointment)
    {
        //
    }
}
