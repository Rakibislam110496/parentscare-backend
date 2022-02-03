<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDoctorAppointmentRequest;
use App\Http\Requests\StoreDoctorRequest;
use App\Http\Requests\UpdateDoctorRequest;
use App\Models\Doctor;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(Request $request): JsonResponse
    {
        $doctors = new Doctor();

        if($request->has('name')){
            $doctors = $doctors->where('name', 'LIKE', "%{$request->name}%");
        }

        $doctors = $doctors->with('department')->orderBy('is_senior', 'desc')->paginate(20);

        return response()->json($doctors);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreDoctorRequest $request
     * @return JsonResponse
     */
    public function store(StoreDoctorRequest $request): JsonResponse
    {
        $validated = $request->validated();

        $validated['password'] = Hash::make(Str::random(6));

        $doctor = Doctor::create($validated);
        return response()->json($doctor);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function show(Doctor $doctor)
    {
        return response()->json($doctor->load(['department', 'appointments']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return JsonResponse
     */
    public function update(UpdateDoctorRequest $request, Doctor $doctor): JsonResponse
    {
        $validated = $request->validated();

        if ($request->has('password')) {
            $validated['password'] = Hash::make($request->password);
        }

        $doctor->update($validated);

        return response()->json($doctor);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(Doctor $doctor)
    {
        PhotoController::delete($doctor->photo);

        $doctor->delete();

        return response()->json(['message' => 'Doctor deleted.']);
    }

    public function book(StoreDoctorAppointmentRequest $request, Doctor $doctor)
    {
        $validated = $request->validated();

        $validated['user_id'] = auth()->id();

        $appointment = $doctor->appointments()->create($validated);

        return response()->json($appointment);
    }
}
