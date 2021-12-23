<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTherapistLocationRequest;
use App\Http\Requests\UpdateTherapistLocationRequest;
use App\Models\TherapistLocation;
use Illuminate\Http\Request;

class TherapistLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = TherapistLocation::simplePaginate(20);

        return response()->json($locations);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTherapistLocationRequest $request)
    {
        $this->authorize('create', TherapistLocation::class);

        $validated = $request->validated();

        $location = TherapistLocation::create($validated);

        return response()->json($location);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TherapistLocation  $therapistLocation
     * @return \Illuminate\Http\Response
     */
    public function show(TherapistLocation $therapist_location)
    {
        return response()->json($therapist_location);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TherapistLocation  $therapistLocation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTherapistLocationRequest $request, TherapistLocation $therapist_location)
    {
        $this->authorize('update', $therapist_location);

        $validated = $request->validated();

        $therapist_location->update($validated);

        return response()->json($therapist_location);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TherapistLocation  $therapistLocation
     * @return \Illuminate\Http\Response
     */
    public function destroy(TherapistLocation $therapist_location)
    {
        $this->authorize('delete', $therapist_location);

        $therapist_location->delete();

        return response()->json(["message" => "Therapist location deleted."]);
    }
}
