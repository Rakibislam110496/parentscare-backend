<?php

namespace App\Http\Controllers;

use App\Models\NursePackage;
use App\Http\Requests\StoreNursePackageRequest;
use App\Http\Requests\UpdateNursePackageRequest;

class NursePackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = NursePackage::simplePaginate(20);

        return response()->json($packages);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNursePackageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNursePackageRequest $request)
    {
        $this->authorize('create', NursePackage::class);

        $validated = $request->validated();

        $package = NursePackage::create($validated);

        return response()->json($package);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NursePackage  $nursePackage
     * @return \Illuminate\Http\Response
     */
    public function show(NursePackage $nursePackage)
    {
        return response()->json($nursePackage);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNursePackageRequest  $request
     * @param  \App\Models\NursePackage  $nursePackage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNursePackageRequest $request, NursePackage $nursePackage)
    {
        $this->authorize('update', $nursePackage);

        $validated = $request->validated();

        $nursePackage->update($validated);

        return response()->json($nursePackage);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NursePackage  $nursePackage
     * @return \Illuminate\Http\Response
     */
    public function destroy(NursePackage $nursePackage)
    {
        $this->authorize('delete', $nursePackage);

        $nursePackage->delete();

        return response()->json(['message' => 'Nurse package deleted.']);
    }
}
