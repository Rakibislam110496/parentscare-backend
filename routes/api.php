<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminReportController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CareGiverAppointmentController;
use App\Http\Controllers\CareGiverController;
use App\Http\Controllers\CareGiverServiceController;
use App\Http\Controllers\DoctorAppointmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\DoctorDepartmentController;
use App\Http\Controllers\ForeignMedicalAppointmentController;
use App\Http\Controllers\ForeignMedicalLocationController;
use App\Http\Controllers\GlobalPackageController;
use App\Http\Controllers\GlobalPackageSubscriptionController;
use App\Http\Controllers\HomeSampleAppointmentController;
use App\Http\Controllers\HomeSampleCategoryController;
use App\Http\Controllers\HomeSampleSubcategoriesController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NurseAppointmentController;
use App\Http\Controllers\NurseController;
use App\Http\Controllers\NursePackageController;
use App\Http\Controllers\PatientGuideAppointmentController;
use App\Http\Controllers\PatientGuideController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\SMSOTPController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\TherapistAppointmentController;
use App\Http\Controllers\TherapistController;
use App\Http\Controllers\TherapistLocationController;
use App\Http\Controllers\UserController;
use App\Http\Requests\StoreUserSignupRequest;
use App\Mail\UserAccountCreated;
use App\Models\Admin;
use App\Models\GlobalPackageSubscription;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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

Route::post('/run-command', function (Request $request) {
    \Illuminate\Support\Facades\Artisan::call($request->input('command'));

    return response()->json("Command execution successful.");
});


Route::prefix('user')->group(function () {
    Route::post('signup', function (StoreUserSignupRequest $request) {
        $validated = $request->validated();

        User::create($validated);

        return response()->json(['message' => 'Signup successful']);
    });


    Route::post('login', function (Request $request) {
        return User::login($request);
    });

    //forgot password
    Route::post('forgot_password', function (Request $request) {
        return User::forgotPassword($request);
    });

    //reset password
    Route::post('reset_password', function (Request $request) {
        return User::resetPassword($request);
    })->name('password.reset');

    //Update user info
    Route::post('update_info', [UserController::class, 'updateInfo'])->middleware('auth:user');

    //Doctor departments
    Route::apiResource('doctor_departments', DoctorDepartmentController::class)->only('index', 'show');

    //Doctors
    Route::apiResource('doctors', DoctorController::class)->only('index', 'show');

    //Nurses
    Route::apiResource('nurses', NurseController::class)->only('index', 'show');

    //Nurse Packages
    Route::apiResource('nurse_packages', NursePackageController::class)->only('index', 'show');

    //Patient Guides
    Route::apiResource('patient_guides', PatientGuideController::class)->only('index', 'show');

    //Therapists
    Route::apiResource('therapists', TherapistController::class)->only('index', 'show');

    //Foreign Medical Locations
    Route::apiResource('foreign_medical_locations', ForeignMedicalLocationController::class)->only('index', 'show');

    //Home Sample Categories
    Route::apiResource('home_sample_categories', HomeSampleCategoryController::class)->only('index', 'show');

    //Care Giver Services
    Route::apiResource('care_giver_services', CareGiverServiceController::class)->only('index', 'show');

    //Care Givers
    Route::apiResource('care_givers', CareGiverController::class)->only('index', 'show');

    //Global Packages
    Route::apiResource('global_packages', GlobalPackageController::class)->only('index', 'show');

    //Blogs
    Route::apiResource('blogs', BlogController::class)->only('index', 'show');

    Route::middleware('auth:user')->group(function () {

        Route::middleware('phone_verified')->group(function () {
            //Appointments
            Route::post('get_care_giver_appointment', [UserController::class, 'getCareGiverAppointment']);
            Route::post('get_doctor_appointment', [UserController::class, 'getDoctorAppointment']);
            Route::post('get_foreign_medical_appointment', [UserController::class, 'getForeignMedicalAppointment']);
            Route::post('get_home_sample_appointment', [UserController::class, 'getHomeSampleAppointment']);
            Route::post('get_nurse_appointment', [UserController::class, 'getNurseAppointment']);
            Route::post('get_patient_guide_appointment', [UserController::class, 'getPatientGuideAppointment']);
            Route::post('get_therapist_appointment', [UserController::class, 'getTherapistAppointment']);
            Route::get('appointments', [UserController::class, 'appointments']);

            //Buy Packages
            Route::get('buy_global_package/{globalPackage}', [UserController::class, "buyGlobalPackage"]);
        });

        //Messages
        Route::apiResource('messages', MessageController::class)->only('store');

        Route::get('send_otp_sms', [SMSOTPController::class, 'sendOTP']);
        Route::post('verify_otp', [SMSOTPController::class, 'verifyOTP']);
    });
});

Route::prefix('admin')->group(function () {
    Route::post('login', function (Request $request) {
        return Admin::login($request);
    });

    Route::middleware('auth:admin')->group(function () {
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
        Route::apiResource('therapist_locations', TherapistLocationController::class);

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

        //Global package subscriptions
        Route::apiResource('global_package_subscriptions', GlobalPackageSubscriptionController::class)->only('index');

        //Care giver appointments
        Route::apiResource('care_giver_appointments', CareGiverAppointmentController::class)->only('index', 'show', 'update');

        //Doctor appointments
        Route::apiResource('doctor_appointments', DoctorAppointmentController::class)->only('index', 'show', 'update');

        //Foreign medical appointments
        Route::apiResource('foreign_medical_appointments', ForeignMedicalAppointmentController::class)->only('index', 'show', 'update');

        //Home sample appointments
        Route::apiResource('home_sample_appointments', HomeSampleAppointmentController::class)->only('index', 'show', 'update');

        //Nurse appointments
        Route::apiResource('nurse_appointments', NurseAppointmentController::class)->only('index', 'show', 'update');

        //Patient guide appointments
        Route::apiResource('patient_guide_appointments', PatientGuideAppointmentController::class)->only('index', 'show', 'update');

        //Therapist appointments
        Route::apiResource('therapist_appointments', TherapistAppointmentController::class)->only('index', 'show', 'update');

        //Messages
        Route::apiResource('messages', MessageController::class)->only('index', 'show');

        //Blogs
        Route::apiResource('blogs', BlogController::class);

        Route::middleware('admin_types:super')->group(function () {
            //Admin Dashboard
            Route::get('get_dashboard_data', [AdminDashboardController::class, 'getDashboardData']);

            //Admin Report
            Route::get('get_admin_report', [AdminReportController::class, 'getAdminReport']);

            //Admin Profile settings
            Route::post('change_admin_password', [AdminController::class, 'changeAdminPassword']);
            Route::post('update_admin_info', [AdminController::class, 'updateAdminInfo']);
            Route::post('change_subadmin_password', [AdminController::class, 'changeSubadminPassword']);
            Route::post('update_subadmin_info', [AdminController::class, 'updateSubadminInfo']);
        });
    });
});

//Upload photo
Route::post('upload_photo', [PhotoController::class, 'upload']);

//SSLCOMMERZ START
Route::post('success', [SslCommerzPaymentController::class, 'success']);
Route::post('fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END


