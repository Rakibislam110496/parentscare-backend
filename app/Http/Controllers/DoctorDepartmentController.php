<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDoctorDepartmentRequest;
use App\Http\Requests\UpdateDoctorDepartmentRequest;
use App\Models\DoctorDepartment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DoctorDepartmentController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = DoctorDepartment::paginate(20);

        return response()->json($departments);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDoctorDepartmentRequest $request)
    {
        $validated = $request->validated();

        $validated['slug'] = Str::slug($validated['name']);

        $department = DoctorDepartment::create($validated);

        return response()->json($department);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DoctorDepartment  $doctorDepartment
     * @return \Illuminate\Http\Response
     */
    public function show(DoctorDepartment $doctorDepartment)
    {
        return response()->json($doctorDepartment);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DoctorDepartment  $doctorDepartment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDoctorDepartmentRequest $request, DoctorDepartment $doctor_department)
    {
        $validated = $request->validated();

        $validated['slug'] = Str::slug($validated['name']);

        $doctor_department->update($validated);

        return response()->json($doctor_department);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DoctorDepartment  $doctorDepartment
     * @return \Illuminate\Http\Response
     */
    public function destroy(DoctorDepartment $doctorDepartment)
    {
        $doctorDepartment->delete();

        return response()->json(['message' => "Doctor department deleted."]);
    }
}
