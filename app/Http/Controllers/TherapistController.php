<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTherapistLocationRequest;
use App\Http\Requests\StoreTherapistRequest;
use App\Http\Requests\UpdateTherapistRequest;
use App\Models\Therapist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TherapistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $therapists = Therapist::simplePaginate(20);

        return response($therapists);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTherapistRequest $request)
    {
        $validated = $request->validated();

        $validated['password'] = Hash::make(Str::random(6));

        $therapist = Therapist::create($validated);

        return response()->json($therapist);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Therapist  $therapist
     * @return \Illuminate\Http\Response
     */
    public function show(Therapist $therapist)
    {
        return response()->json($therapist);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Therapist  $therapist
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTherapistRequest $request, Therapist $therapist)
    {
        $validated = $request->validated();

        if($request->has('password')){
            $validated['password'] = Hash::make($request->password);
        }

        $therapist->update($validated);

        return response()->json($therapist);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Therapist  $therapist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Therapist $therapist)
    {
        PhotoController::delete($therapist->photo);

        $therapist->delete();

        return response()->json(['message'=>"Therapist deleted."]);
    }
}
