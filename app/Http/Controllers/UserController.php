<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCaregiverAppointmentRequest;
use App\Http\Requests\StoreDoctorAppointmentRequest;
use App\Http\Requests\StoreForeignMedicalAppointmentRequest;
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
        $users = User::simplePaginate(20);

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
    public function show($id)
    {

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
    }

    public function getHomeSampleAppointment()
    {

    }

    public function getNurseAppointment()
    {

    }

    public function getPatientGuideAppointment()
    {

    }

    public function getTherapistAppointment()
    {

    }

    public function appointments(Request $request)
    {
        switch ($request->t) {
            case 'care_giver':
                return response()->json(auth()->user()->careGiverAppointments);
            case 'doctor':
                return response()->json(auth()->user()->doctorAppointments);

            default:
                return response()->json([]);
        }
    }

}
