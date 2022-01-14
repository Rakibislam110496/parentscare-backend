<?php

namespace App\Http\Controllers;

use App\Models\CareGiverAppointment;
use App\Models\DoctorAppointment;
use App\Models\ForeignMedicalAppointment;
use App\Models\GlobalPackageSubscription;
use App\Models\HomeSampleAppointment;
use App\Models\NurseAppointment;
use App\Models\PatientGuideAppointment;
use App\Models\TherapistAppointment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminReportController extends Controller
{
    public function getAdminReport(Request $request){
        $request->validate([
            'date_from' => 'required|date',
            'date_to' => 'required|date|after:date_from',
            't' => 'required|string'
        ]);

        $from = Carbon::parse($request->date_from);
        $to = Carbon::parse($request->date_to)->addDay()->subSecond();

        switch ($request->t) {
            case 'care_giver':
                return response()->json(CareGiverAppointment::whereBetween('created_at',[$from, $to])->with(['user', 'order'])->get());
            case 'doctor':
                return response()->json(DoctorAppointment::whereBetween('created_at',[$from, $to])->with(['user', 'order'])->get());
            case 'foreign_medical':
                return response()->json(ForeignMedicalAppointment::whereBetween('created_at',[$from, $to])->with(['user','location'])->get());
            case 'home_sample':
                return response()->json(HomeSampleAppointment::whereBetween('created_at',[$from, $to])->with(['user', 'order'])->get());
            case 'nurse':
                return response()->json(NurseAppointment::whereBetween('created_at',[$from, $to])->with(['user', 'order'])->get());
            case 'patient_guide':
                return response()->json(PatientGuideAppointment::whereBetween('created_at',[$from, $to])->with(['user', 'order'])->get());
            case 'therapist':
                return response()->json(TherapistAppointment::whereBetween('created_at',[$from, $to])->with(['user', 'order'])->get());
            case 'global_package_subscription':
                return response()->json(GlobalPackageSubscription::whereBetween('created_at',[$from, $to])->with(['user', 'order'])->get());
            default:
                return response()->json([]);
        }
    }
}
