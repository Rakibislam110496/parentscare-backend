<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNurseRequest;
use App\Http\Requests\UpdateNurseRequest;
use App\Models\Nurse;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class NurseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(Request $request): JsonResponse
    {
        $nurses = new Nurse();

        if($request->has('name')){
            $nurses = $nurses->where('name', 'LIKE', "%{$request->name}%");
        }

        if($request->has("is_special")){
            $nurses = $nurses->where('is_special', $request->is_special);
        }

        if(isAdmin())
            $nurses = $nurses->with('ongoingAppointments');

        $nurses = $nurses->paginate(20);

        return response()->json($nurses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreNurseRequest $request
     * @return JsonResponse
     */
    public function store(StoreNurseRequest $request): JsonResponse
    {
        $validated = $request->validated();

        $validated['password'] = Hash::make(Str::random(6));

        $nurse = Nurse::create($validated);

        return response()->json($nurse);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function show(Nurse $nurse): JsonResponse
    {
        if(isAdmin())
            $nurse->load('appointments');
        return response()->json($nurse);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateNurseRequest $request
     * @param  int  $id
     * @return JsonResponse
     */
    public function update(UpdateNurseRequest $request, Nurse $nurse): JsonResponse
    {
        $validated = $request->validated();

        if($request->has('password')){
            $validated['password'] = Hash::make($request->password);
        }

        $nurse->update($validated);

        return response()->json($nurse);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nurse $nurse)
    {
        PhotoController::delete($nurse->photo);

        $nurse->delete();

        return response()->json(['message' => 'Nurse deleted.']);
    }

}
