<?php

namespace App\Http\Controllers;

use App\Models\ForeignMedicalLocation;
use App\Http\Requests\StoreForeignMedicalLocationRequest;
use App\Http\Requests\UpdateForeignMedicalLocationRequest;

class ForeignMedicalLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = ForeignMedicalLocation::simplePaginate(20);

        return response()->json($locations);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreForeignMedicalLocationRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreForeignMedicalLocationRequest $request)
    {
        $validated = $request->validated();

        $location = ForeignMedicalLocation::create($validated);

        return response()->json($location);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\ForeignMedicalLocation $foreignMedicalLocation
     * @return \Illuminate\Http\Response
     */
    public function show(ForeignMedicalLocation $foreignMedicalLocation)
    {
        return response()->json($foreignMedicalLocation);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateForeignMedicalLocationRequest $request
     * @param \App\Models\ForeignMedicalLocation $foreignMedicalLocation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateForeignMedicalLocationRequest $request, ForeignMedicalLocation $foreign_medical_location)
    {
        $validated = $request->validated();

        $foreign_medical_location->update($validated);

        return response()->json($foreign_medical_location);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\ForeignMedicalLocation $foreignMedicalLocation
     * @return \Illuminate\Http\Response
     */
    public function destroy(ForeignMedicalLocation $foreignMedicalLocation)
    {
        $foreignMedicalLocation->delete();

        return response()->json(["message" => "Foreign medical location deleted."]);
    }
}
