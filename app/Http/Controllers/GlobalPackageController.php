<?php

namespace App\Http\Controllers;

use App\Models\GlobalPackage;
use App\Http\Requests\StoreGlobalPackageRequest;
use App\Http\Requests\UpdateGlobalPackageRequest;

class GlobalPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = GlobalPackage::paginate(20);

        return response()->json($packages);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGlobalPackageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGlobalPackageRequest $request)
    {
        $validated = $request->validated();

        $package = GlobalPackage::create($validated);

        return response()->json($package);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GlobalPackage  $globalPackage
     * @return \Illuminate\Http\Response
     */
    public function show(GlobalPackage $globalPackage)
    {
        return response()->json($globalPackage);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGlobalPackageRequest  $request
     * @param  \App\Models\GlobalPackage  $globalPackage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGlobalPackageRequest $request, GlobalPackage $globalPackage)
    {
        $validated = $request->validated();

        $globalPackage->update($validated);

        return response()->json($globalPackage);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GlobalPackage  $globalPackage
     * @return \Illuminate\Http\Response
     */
    public function destroy(GlobalPackage $globalPackage)
    {
        $globalPackage->delete();

        return response()->json(['message' => 'Global package deleted.']);
    }
}
