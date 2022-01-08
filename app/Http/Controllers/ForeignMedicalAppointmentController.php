<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateForeignMedicalAppointmentRequest;
use App\Models\ForeignMedicalAppointment;
use Illuminate\Http\Request;

class ForeignMedicalAppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments = ForeignMedicalAppointment::with('user', 'location')->paginate(20);

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
     * @param  \App\Models\ForeignMedicalAppointment  $foreignMedicalAppointment
     * @return \Illuminate\Http\Response
     */
    public function show(ForeignMedicalAppointment $foreignMedicalAppointment)
    {
        return response()->json($foreignMedicalAppointment->load('user', 'location'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ForeignMedicalAppointment  $foreignMedicalAppointment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateForeignMedicalAppointmentRequest $request, ForeignMedicalAppointment $foreignMedicalAppointment)
    {
        $validated = $request->validated();

        $foreignMedicalAppointment->update($validated);

        return response()->json($foreignMedicalAppointment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ForeignMedicalAppointment  $foreignMedicalAppointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(ForeignMedicalAppointment $foreignMedicalAppointment)
    {
        //
    }
}
