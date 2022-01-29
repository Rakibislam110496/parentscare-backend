<?php

use App\Models\Admin;
use App\Models\CareGiverAppointment;
use App\Models\DoctorAppointment;
use App\Models\ForeignMedicalAppointment;
use App\Models\GlobalPackageSubscription;
use App\Models\HomeSampleAppointment;
use App\Models\NurseAppointment;
use App\Models\PatientGuideAppointment;
use App\Models\TherapistAppointment;
use App\Models\User;

if (!function_exists('isUser')) {
    function isUser(): bool
    {
        return auth()->check() && get_class(auth()->user()) == User::class;
    }
}

if (!function_exists('isAdmin')) {
    function isAdmin(): bool
    {
        return auth()->check() && get_class(auth()->user()) == Admin::class;
    }
}

if (!function_exists('getServiceName')) {
    function getServiceName($service): string
    {
        if ($service instanceof CareGiverAppointment)
            return "Care Giver Appointment";
        else if ($service instanceof DoctorAppointment)
            return "Doctor Appointment";
        else if ($service instanceof ForeignMedicalAppointment)
            return "Foreign Medical Appointment";
        else if ($service instanceof HomeSampleAppointment)
            return "Home Sample Appointment";
        else if ($service instanceof NurseAppointment)
            return "Nurse Appointment";
        else if ($service instanceof PatientGuideAppointment)
            return "Patient Guide Appointment";
        else if ($service instanceof TherapistAppointment)
            return "Therapist Appointment";
        else if ($service instanceof GlobalPackageSubscription)
            return "Global Package Subscription";

        return "Unknown Service";
    }
}
