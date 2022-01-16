<?php

namespace App\Http\Controllers;

use App\Models\CareGiver;
use App\Models\CareGiverAppointment;
use App\Models\Doctor;
use App\Models\DoctorAppointment;
use App\Models\ForeignMedicalAppointment;
use App\Models\GlobalPackageSubscription;
use App\Models\HomeSampleAppointment;
use App\Models\HomeSampleSubcategory;
use App\Models\Nurse;
use App\Models\NurseAppointment;
use App\Models\Order;
use App\Models\PatientGuide;
use App\Models\PatientGuideAppointment;
use App\Models\Therapist;
use App\Models\TherapistAppointment;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function getDashboardData(){
        //earning and revenue
        $orders = Order::where('status', 'Processing')->with('orderable')->get();

        $earning = [
            "doctor" => 0.0,
            "nurse" => 0.0,
            "home_sample" => 0.0,
            "care_giver" => 0.0,
            "patient_guide" => 0.0,
            "therapist" => 0.0,
            "global_package" => 0.0,
            "total" => 0.0
        ];

        $revenue = [
            "doctor" => 0.0,
            "nurse" => 0.0,
            "home_sample" => 0.0,
            "care_giver" => 0.0,
            "patient_guide" => 0.0,
            "therapist" => 0.0,
            "global_package" => 0.0,
            "total" => 0.0
        ];

        foreach ($orders as $order){
            $revenue["total"] += round($order->amount, 2);
            $earning["total"] += round(($order->orderable->share/100) * $order->amount, 2);

            switch (get_class($order->orderable)){
                case DoctorAppointment::class:
                    $revenue["doctor"] += $order->amount;
                    $earning["doctor"] += round(($order->orderable->share/100) * $order->amount, 2);
                    break;
                case NurseAppointment::class:
                    $revenue["nurse"] += $order->amount;
                    $earning["nurse"] += round(($order->orderable->share/100) * $order->amount, 2);
                    break;
                case HomeSampleAppointment::class:
                    $revenue["home_sample"] += $order->amount;
                    $earning["home_sample"] += round(($order->orderable->share/100) * $order->amount, 2);
                    break;
                case CareGiverAppointment::class:
                    $revenue["care_giver"] += $order->amount;
                    $earning["care_giver"] += round(($order->orderable->share/100) * $order->amount, 2);
                    break;
                case PatientGuideAppointment::class:
                    $revenue["patient_guide"] += $order->amount;
                    $earning["patient_guide"] += round(($order->orderable->share/100) * $order->amount, 2);
                    break;
                case TherapistAppointment::class:
                    $revenue["therapist"] += $order->amount;
                    $earning["therapist"] += round(($order->orderable->share/100) * $order->amount, 2);
                    break;
                case GlobalPackageSubscription::class:
                    $revenue["global_package"] += $order->amount;
                    $earning["global_package"] += round(($order->orderable->share/100) * $order->amount, 2);
                    break;
            }
        }

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
        $pending_home_sample_appointment = HomeSampleAppointment::where('status', 'pending')->count();
        $pending_care_giver_appointment = CareGiverAppointment::where('status', 'pending')->count();
        $pending_patient_guide_appointment = PatientGuideAppointment::where('status', 'pending')->count();
        $pending_therapist_appointment = TherapistAppointment::where('status', 'pending')->count();
        $pending_foreign_medical_appointment = ForeignMedicalAppointment::where('status', 'pending')->count();

        //active request
        $active_doctor_appointment = DoctorAppointment::where('status', 'active')->count();
        $active_nurse_appointment = NurseAppointment::where('status', 'active')->count();
        $active_home_sample_appointment = HomeSampleAppointment::where('status', 'active')->count();
        $active_care_giver_appointment = CareGiverAppointment::where('status', 'active')->count();
        $active_patient_guide_appointment = PatientGuideAppointment::where('status', 'active')->count();
        $active_therapist_appointment = TherapistAppointment::where('status', 'active')->count();
        $active_foreign_medical_appointment = ForeignMedicalAppointment::where('status', 'active')->count();

        //cancelled request
        $cancelled_doctor_appointment = DoctorAppointment::where('status', 'cancelled')->count();
        $cancelled_nurse_appointment = NurseAppointment::where('status', 'cancelled')->count();
        $cancelled_home_sample_appointment = HomeSampleAppointment::where('status', 'cancelled')->count();
        $cancelled_care_giver_appointment = CareGiverAppointment::where('status', 'cancelled')->count();
        $cancelled_patient_guide_appointment = PatientGuideAppointment::where('status', 'cancelled')->count();
        $cancelled_therapist_appointment = TherapistAppointment::where('status', 'cancelled')->count();
        $cancelled_foreign_medical_appointment = ForeignMedicalAppointment::where('status', 'cancelled')->count();


        $response = [
            'earning' => $earning,
            'revenue' => $revenue,
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
            ],
            'pending_appointments' => [
                'doctors' => $pending_doctor_appointment,
                'nurse' => $pending_nurse_appointment,
                'home_sample' => $pending_home_sample_appointment,
                'care_giver' => $pending_care_giver_appointment,
                'patient_guide' => $pending_patient_guide_appointment,
                'therapist' => $pending_therapist_appointment,
                'foreign_medical' => $pending_foreign_medical_appointment,
                'total' => $pending_doctor_appointment + $pending_nurse_appointment + $pending_foreign_medical_appointment + $pending_therapist_appointment + $pending_patient_guide_appointment + $pending_care_giver_appointment + $pending_home_sample_appointment
            ],
            'active_appointments' => [
                'doctors' => $active_doctor_appointment,
                'nurse' => $active_nurse_appointment,
                'home_sample' => $active_home_sample_appointment,
                'care_giver' => $active_care_giver_appointment,
                'patient_guide' => $active_patient_guide_appointment,
                'therapist' => $active_therapist_appointment,
                'foreign_medical' => $active_foreign_medical_appointment,
                'total' => $active_doctor_appointment + $active_nurse_appointment + $active_therapist_appointment + $active_care_giver_appointment + $active_foreign_medical_appointment + $active_home_sample_appointment + $active_patient_guide_appointment
            ],
            'cancelled_appointments' => [
                'doctors' => $cancelled_doctor_appointment,
                'nurse' => $cancelled_nurse_appointment,
                'home_sample' => $cancelled_home_sample_appointment,
                'care_giver' => $cancelled_care_giver_appointment,
                'patient_guide' => $cancelled_patient_guide_appointment,
                'therapist' => $cancelled_therapist_appointment,
                'foreign_medical' => $cancelled_foreign_medical_appointment,
                'total' => $cancelled_doctor_appointment + $cancelled_nurse_appointment, $cancelled_therapist_appointment + $cancelled_care_giver_appointment + $cancelled_foreign_medical_appointment + $cancelled_home_sample_appointment + $cancelled_home_sample_appointment
            ],
            'packages' => [

            ]
        ];

        return response()->json($response);
    }
}
