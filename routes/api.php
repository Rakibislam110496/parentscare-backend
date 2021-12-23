<?php

use App\Http\Controllers\CareGiverController;
use App\Http\Controllers\CareGiverServiceController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\DoctorDepartmentController;
use App\Http\Controllers\ForeignMedicalLocationController;
use App\Http\Controllers\HomeSampleCategoryController;
use App\Http\Controllers\HomeSampleSubcategoriesController;
use App\Http\Controllers\NurseController;
use App\Http\Controllers\PatientGuideController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\TherapistController;
use App\Http\Controllers\TherapistLocationController;
use App\Models\Admin;
use App\Models\ForeignMedicalLocation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('user_login', function (Request $request) {
    return User::login($request);
});

Route::post('admin_login', function (Request $request) {
    return Admin::login($request);
});

//Upload photo
Route::post('upload_photo', [PhotoController::class, 'upload']);

Route::middleware('auth:sanctum')->group(function () {

    //Doctor departments
    Route::apiResource('doctor_departments', DoctorDepartmentController::class);

    //Doctors
    Route::apiResource('doctors', DoctorController::class);

    //Nurses
    Route::apiResource('nurses', NurseController::class);

    //Patient Guides
    Route::apiResource('patient_guides', PatientGuideController::class);

    //Therapist Locations
    Route::apiResource('therapist_location', TherapistLocationController::class);

    //Therapists
    Route::apiResource('therapist', TherapistController::class);

    //Foreign Medical Locations
    Route::apiResource('foreign_medical_locations', ForeignMedicalLocationController::class);

    //Home Sample Categories
    Route::apiResource('home_sample_categories', HomeSampleCategoryController::class);

    //Home Sample Subcategories
    Route::apiResource('home_sample_subcategories', HomeSampleSubcategoriesController::class);

    //Care Giver Services
    Route::apiResource('care_giver_services', CareGiverServiceController::class);

    //Care Givers
    Route::apiResource('care_givers', CareGiverController::class);

});

