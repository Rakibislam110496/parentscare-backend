<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateNurseAppointmentRequest;
use App\Models\NurseAppointment;
use Illuminate\Http\Request;

class NurseAppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments = NurseAppointment::with('user', 'nurse', 'package')->paginate(20);

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
     * @param  \App\Models\NurseAppointment  $nurseAppointment
     * @return \Illuminate\Http\Response
     */
    public function show(NurseAppointment $nurseAppointment)
    {
        return response()->json($nurseAppointment->load('user', 'nurse', 'package'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NurseAppointment  $nurseAppointment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNurseAppointmentRequest $request, NurseAppointment $nurseAppointment)
    {
        $validated = $request->validated();

        $nurseAppointment->update($validated);

        return response()->json($nurseAppointment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NurseAppointment  $nurseAppointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(NurseAppointment $nurseAppointment)
    {
        //
    }
}
