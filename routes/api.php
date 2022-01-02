<?php

use App\Http\Controllers\CareGiverController;
use App\Http\Controllers\CareGiverServiceController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\DoctorDepartmentController;
use App\Http\Controllers\DoctorRequestController;
use App\Http\Controllers\ForeignMedicalLocationController;
use App\Http\Controllers\GlobalPackageController;
use App\Http\Controllers\HomeSampleCategoryController;
use App\Http\Controllers\HomeSampleSubcategoriesController;
use App\Http\Controllers\NurseController;
use App\Http\Controllers\NursePackageController;
use App\Http\Controllers\PatientGuideController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\TherapistController;
use App\Http\Controllers\TherapistLocationController;
use App\Http\Controllers\UserController;
use App\Models\Admin;
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


Route::prefix('user')->group(function (){
    Route::post('login', function (Request $request) {
        return User::login($request);
    });

    Route::middleware('auth:user')->group(function (){
        //Doctors
        Route::apiResource('doctors', DoctorController::class)->only('index', 'show');

        //Nurses
        Route::apiResource('nurses', NurseController::class)->only('index', 'show');

        //Nurse Packages
        Route::apiResource('nurse_packages', NursePackageController::class)->only('index', 'show');

        //Patient Guides
        Route::apiResource('patient_guides', PatientGuideController::class)->only('index', 'show');

        //Therapist Locations
        Route::apiResource('therapist_location', TherapistLocationController::class)->only('index', 'show');

        //Therapists
        Route::apiResource('therapists', TherapistController::class)->only('index', 'show');

        //Foreign Medical Locations
        Route::apiResource('foreign_medical_locations', ForeignMedicalLocationController::class)->only('index', 'show');

        //Home Sample Categories
        Route::apiResource('home_sample_categories', HomeSampleCategoryController::class)->only('index', 'show');

        //Home Sample Subcategories
        Route::apiResource('home_sample_subcategories', HomeSampleSubcategoriesController::class)->only('index', 'show');

        //Care Giver Services
        Route::apiResource('care_giver_services', CareGiverServiceController::class)->only('index', 'show');

        //Care Givers
        Route::apiResource('care_givers', CareGiverController::class)->only('index', 'show');

        //Global Packages
        Route::apiResource('global_packages', GlobalPackageController::class)->only('index', 'show');


    });

    Route::post('get_care_giver_appointment', [UserController::class, 'getCareGiverAppointment']);
    Route::post('get_doctor_appointment', [UserController::class, 'getDoctorAppointment']);
    Route::post('get_foreign_medical_appointment', [UserController::class, 'getForeignMedicalAppointment']);
    Route::post('get_home_sample_appointment', [UserController::class, 'getHomeSampleAppointment']);
    Route::post('get_nurse_appointment', [UserController::class, 'getNurseAppointment']);
    Route::post('get_patient_guide_appointment', [UserController::class, 'getPatientGuideAppointment']);
    Route::post('get_therapist_appointment', [UserController::class, 'getTherapistAppointment']);
    Route::get('appointments', [UserController::class, 'appointments']);
});

Route::prefix('admin')->group(function (){
    Route::post('login', function (Request $request) {
        return Admin::login($request);
    });

    Route::middleware('auth:admin')->group(function (){
        //Users
        Route::apiResource('users', UserController::class);

        //Doctor departments
        Route::apiResource('doctor_departments', DoctorDepartmentController::class);

        //Doctors
        Route::apiResource('doctors', DoctorController::class);

        //Nurses
        Route::apiResource('nurses', NurseController::class);

        //Nurse Packages
        Route::apiResource('nurse_packages', NursePackageController::class);

        //Patient Guides
        Route::apiResource('patient_guides', PatientGuideController::class);

        //Therapist Locations
        Route::apiResource('therapist_location', TherapistLocationController::class);

        //Therapists
        Route::apiResource('therapists', TherapistController::class);

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

        //Global Packages
        Route::apiResource('global_packages', GlobalPackageController::class);

    });


});


//Upload photo
Route::post('upload_photo', [PhotoController::class, 'upload']);

