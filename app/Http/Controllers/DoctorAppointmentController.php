<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateDoctorAppointmentRequest;
use App\Models\DoctorAppointment;
use Illuminate\Http\Request;

class DoctorAppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments = DoctorAppointment::with('user', 'doctor')->paginate(20);

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
     * @param  \App\Models\DoctorAppointment  $doctorAppointment
     * @return \Illuminate\Http\Response
     */
    public function show(DoctorAppointment $doctorAppointment)
    {
        return response()->json($doctorAppointment->load('user', 'doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DoctorAppointment  $doctorAppointment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDoctorAppointmentRequest $request, DoctorAppointment $doctorAppointment)
    {
        $validated = $request->validated();

        $doctorAppointment->update($validated);

        return response()->json($doctorAppointment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DoctorAppointment  $doctorAppointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(DoctorAppointment $doctorAppointment)
    {
        //
    }
}
