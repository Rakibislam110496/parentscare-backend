<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCaregiverAppointmentRequest;
use App\Http\Requests\StoreDoctorAppointmentRequest;
use App\Http\Requests\StoreForeignMedicalAppointmentRequest;
use App\Http\Requests\StoreHomeSampleAppointmentRequest;
use App\Http\Requests\StoreNurseAppointmentRequest;
use App\Http\Requests\StorePatientGuideAppointmentRequest;
use App\Http\Requests\StoreTherapistAppointmentRequest;
use App\Models\NursePackage;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('doctorAppointments', 'careGiverAppointments', 'foreignMedicalAppointments', 'homeSampleAppointments', 'nurseAppointments', 'patientGuideAppointments', 'therapistAppointments')->paginate(20);

        return response()->json($users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return response()->json($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    public function getCareGiverAppointment(StoreCaregiverAppointmentRequest $request)
    {
        $validated = $request->validated();

        $appointment = DB::transaction(function () use ($validated) {
            return auth()->user()->careGiverAppointments()->create($validated);
        });

        return response()->json($appointment);
    }

    public function getDoctorAppointment(StoreDoctorAppointmentRequest $request): JsonResponse
    {
        $validated = $request->validated();

        $appointment = DB::transaction(function () use ($validated) {
            return auth()->user()->doctorAppointments()->create($validated);
        });

        return response()->json($appointment);
    }

    public function getForeignMedicalAppointment(StoreForeignMedicalAppointmentRequest $request)
    {
        $validated = $request->validated();

        $appointment = DB::transaction(function () use ($validated) {
            return auth()->user()->foreignMedicalAppointments()->create($validated);
        });

        return response()->json($appointment);
    }

    public function getHomeSampleAppointment(StoreHomeSampleAppointmentRequest $request)
    {
        $validated = $request->validated();

        $appointment = DB::transaction(function () use ($validated) {
            return auth()->user()->homeSampleAppointments()->create($validated);
        });

        return response()->json($appointment);
    }

    public function getNurseAppointment(StoreNurseAppointmentRequest $request)
    {
        $validated = $request->validated();

        if ($request->has('nurse_package_id')) {
            $package = NursePackage::find($request->nurse_package_id);
            $validated['duration'] = $package->duration;
        }

        $appointment = DB::transaction(function () use ($validated) {
            return auth()->user()->nurseAppointments()->create($validated);
        });

        return response()->json($appointment);
    }

    public function getPatientGuideAppointment(StorePatientGuideAppointmentRequest $request)
    {
        $validated = $request->validated();

        $appointment = DB::transaction(function () use ($validated) {
            return auth()->user()->patientGuideAppointments()->create($validated);
        });

        return response()->json($appointment);
    }

    public function getTherapistAppointment(StoreTherapistAppointmentRequest $request)
    {
        $validated = $request->validated();

        $appointment = DB::transaction(function () use ($validated) {
            return auth()->user()->therapistAppointments()->create($validated);
        });

        return response()->json($appointment);
    }

    public function appointments(Request $request)
    {
        switch ($request->t) {
            case 'care_giver':
                return response()->json(auth()->user()->careGiverAppointments);
            case 'doctor':
                return response()->json(auth()->user()->doctorAppointments);
            case 'foreign_medical':
                return response()->json(auth()->user()->foreignMedicalAppointments);
            case 'home_sample':
                return response()->json(auth()->user()->homeSampleAppointments);
            case 'nurse':
                return response()->json(auth()->user()->nurseAppointments);
            case 'patient_guide':
                return response()->json(auth()->user()->patientGuideAppointments);
            case 'therapist':
                return response()->json(auth()->user()->therapistAppointments);
            default:
                return response()->json([]);
        }
    }

}
