<?php

namespace App\Http\Controllers;

use App\Models\HomeSampleCategory;
use App\Http\Requests\StoreHomeSampleCategoryRequest;
use App\Http\Requests\UpdateHomeSampleCategoryRequest;
use Illuminate\Support\Str;

class HomeSampleCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = HomeSampleCategory::with('subcategories')->get();

        return response()->json($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHomeSampleCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHomeSampleCategoryRequest $request)
    {
        $validated = $request->validated();

        $category = HomeSampleCategory::create($validated);

        return response()->json($category);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomeSampleCategory  $homeSampleCategory
     * @return \Illuminate\Http\Response
     */
    public function show(HomeSampleCategory $homeSampleCategory)
    {
        return response()->json($homeSampleCategory->load('subcategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHomeSampleCategoryRequest  $request
     * @param  \App\Models\HomeSampleCategory  $homeSampleCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHomeSampleCategoryRequest $request, HomeSampleCategory $home_sample_category)
    {
        $validated = $request->validated();

        $home_sample_category->update($validated);

        return response()->json($home_sample_category);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeSampleCategory  $homeSampleCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeSampleCategory $homeSampleCategory)
    {
        $homeSampleCategory->delete();

        return response()->json(['message' => 'Home sample category deleted']);
    }
}
