<?php

namespace App\Http\Controllers;

use App\Models\CareGiver;
use App\Http\Requests\StoreCareGiverRequest;
use App\Http\Requests\UpdateCareGiverRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CareGiverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $careGivers = CareGiver::simplePaginate(20);

        return response()->json($careGivers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCareGiverRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCareGiverRequest $request)
    {
        $validated = $request->validated();
        $validated['password'] = Hash::make(Str::random(6));

        $careGiver = CareGiver::create($validated);

        return response()->json($careGiver);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CareGiver  $careGiver
     * @return \Illuminate\Http\Response
     */
    public function show(CareGiver $careGiver)
    {
        return response()->json($careGiver);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCareGiverRequest  $request
     * @param  \App\Models\CareGiver  $careGiver
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCareGiverRequest $request, CareGiver $care_giver)
    {
        $validated = $request->validated();

        if($request->has('password')){
            $validated['password'] = Hash::make($request->password);
        }

        $care_giver->update($validated);

        return response()->json($care_giver);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CareGiver  $careGiver
     * @return \Illuminate\Http\Response
     */
    public function destroy(CareGiver $careGiver)
    {
        PhotoController::delete($careGiver->photo);

        $careGiver->delete();

        return response()->json(['message' => 'Care giver deleted.']);
    }
}
