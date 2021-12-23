<?php

namespace App\Http\Controllers;

use App\Models\HomeSampleSubcategory;
use App\Http\Requests\StoreHomeSampleSubcategoryRequest;
use App\Http\Requests\UpdateHomeSampleSubcategoryRequest;
use Illuminate\Support\Str;

class HomeSampleSubcategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = HomeSampleSubcategory::simplePaginate(20);

        return response()->json($subcategories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHomeSampleSubcategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHomeSampleSubcategoryRequest $request)
    {
        $this->authorize('create', HomeSampleSubcategory::class);

        $validated = $request->validated();

        $validated['slug'] = Str::slug($validated['name']);

        $subcategory = HomeSampleSubcategory::create($validated);

        return response()->json($subcategory);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomeSampleSubcategory  $homeSampleSubcategory
     * @return \Illuminate\Http\Response
     */
    public function show(HomeSampleSubcategory $homeSampleSubcategory)
    {
        return response()->json($homeSampleSubcategory);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHomeSampleSubcategoryRequest  $request
     * @param  \App\Models\HomeSampleSubcategory  $homeSampleSubcategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHomeSampleSubcategoryRequest $request, HomeSampleSubcategory $homeSampleSubcategory)
    {
        $this->authorize('update', $homeSampleSubcategory);

        $validated = $request->validated();

        $validated['slug'] = Str::slug($validated['name']);

        $homeSampleSubcategory->update($validated);

        return response()->json($homeSampleSubcategory);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeSampleSubcategory  $homeSampleSubcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeSampleSubcategory $homeSampleSubcategory)
    {
        $this->authorize('delete', $homeSampleSubcategory);

        $homeSampleSubcategory->delete();

        return response()->json(['message'=>'Home sample subcategory deleted.']);
    }
}
