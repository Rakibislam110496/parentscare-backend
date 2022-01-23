<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateHomeSampleAppointmentRequest;
use App\Models\HomeSampleAppointment;
use Illuminate\Http\Request;

class HomeSampleAppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments = HomeSampleAppointment::with(['user', 'subcategory', 'order'])->paginate(20);

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
     * @param  \App\Models\HomeSampleAppointment  $homeSampleAppointment
     * @return \Illuminate\Http\Response
     */
    public function show(HomeSampleAppointment $homeSampleAppointment)
    {
        return response()->json($homeSampleAppointment->load('user', 'subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeSampleAppointment  $homeSampleAppointment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHomeSampleAppointmentRequest $request, HomeSampleAppointment $homeSampleAppointment)
    {
        $validated = $request->validated();

        $homeSampleAppointment->update($validated);

        return response()->json($homeSampleAppointment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeSampleAppointment  $homeSampleAppointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeSampleAppointment $homeSampleAppointment)
    {
        //
    }
}
