<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCareGiverAppointmentRequest;
use App\Models\CareGiverAppointment;
use Illuminate\Http\Request;

class CareGiverAppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments = CareGiverAppointment::with('user', 'careGiver', 'order')->paginate(20);

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
     * @param  \App\Models\CareGiverAppointment  $careGiverAppointment
     * @return \Illuminate\Http\Response
     */
    public function show(CareGiverAppointment $careGiverAppointment)
    {
        return response()->json($careGiverAppointment->load('user', 'careGiver', 'order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CareGiverAppointment  $careGiverAppointment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCareGiverAppointmentRequest $request, CareGiverAppointment $careGiverAppointment)
    {
        $validated = $request->validated();

        $careGiverAppointment->update($validated);

        return response()->json($careGiverAppointment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CareGiverAppointment  $careGiverAppointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(CareGiverAppointment $careGiverAppointment)
    {
        //
    }
}
