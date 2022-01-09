<?php

namespace App\Http\Controllers;

use App\Models\CareGiver;
use App\Models\Doctor;
use App\Models\DoctorAppointment;
use App\Models\HomeSampleSubcategory;
use App\Models\Nurse;
use App\Models\NurseAppointment;
use App\Models\PatientGuide;
use App\Models\Therapist;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function getDashboardData(){
        //todo
        $total_earning = 0;

        //todo
        $total_revenue = 0;

        //doctors
        $active_doctor_count = Doctor::where('is_active', true)->count();
        $inactive_doctor_count = Doctor::where('is_active', false)->count();

        //nurses
        $active_nurse_count = Nurse::where('is_active', true)->count();
        $inactive_nurse_count = Nurse::where('is_active', false)->count();

        //therapists
        $active_therapist_count = Therapist::where('is_active', true)->count();
        $inactive_therapist_count = Therapist::where('is_active', false)->count();

        //patient guide
        $active_patient_guide_count = PatientGuide::where('is_active', true)->count();
        $inactive_patient_guide_count = PatientGuide::where('is_active', false)->count();

        //care giver
        $active_care_giver_count = CareGiver::where('is_active', true)->count();
        $inactive_care_giver_count = CareGiver::where('is_active', false)->count();

        //home sample
        $active_home_sample_count = HomeSampleSubcategory::where('is_active', true)->count();
        $inactive_home_sample_count = HomeSampleSubcategory::where('is_active', false)->count();

        //pending request
        $pending_doctor_appointment = DoctorAppointment::where('status', 'pending')->count();
        $pending_nurse_appointment = NurseAppointment::where('status', 'pending')->count();
        $pending_nurse_appointment = NurseAppointment::where('status', 'pending')->count();
        $pending_nurse_appointment = NurseAppointment::where('status', 'pending')->count();
        $pending_nurse_appointment = NurseAppointment::where('status', 'pending')->count();
        $pending_nurse_appointment = NurseAppointment::where('status', 'pending')->count();
        $pending_nurse_appointment = NurseAppointment::where('status', 'pending')->count();
        $pending_nurse_appointment = NurseAppointment::where('status', 'pending')->count();

        $response = [
            'doctors' => [
                'active' => $active_doctor_count,
                'inactive' => $inactive_doctor_count,
                'total' => $active_doctor_count + $inactive_doctor_count
            ],
            'nurses' => [
                'active' => $active_nurse_count,
                'inactive' => $inactive_nurse_count,
                'total' => $active_nurse_count + $inactive_nurse_count
            ],
            'therapists' => [
                'active' => $active_therapist_count,
                'inactive' => $inactive_therapist_count,
                'total' => $active_therapist_count + $inactive_therapist_count
            ],
            'patient_guides' => [
                'active' => $active_care_giver_count,
                'inactive' => $inactive_care_giver_count,
                'total' => $active_care_giver_count + $inactive_care_giver_count
            ],
            'care_givers' => [
                'active' => $active_patient_guide_count,
                'inactive' => $inactive_patient_guide_count,
                'total' => $active_patient_guide_count + $inactive_patient_guide_count
            ],
            'home_samples' => [
                'active' => $active_home_sample_count,
                'inactive' => $inactive_home_sample_count,
                'total' => $active_home_sample_count + $inactive_home_sample_count
            ]
        ];

        return response()->json($response);
    }
}
