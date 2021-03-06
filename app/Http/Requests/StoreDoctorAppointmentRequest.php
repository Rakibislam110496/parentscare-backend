<?php

namespace App\Http\Requests;

use App\Models\Doctor;
use Illuminate\Foundation\Http\FormRequest;

class StoreDoctorAppointmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_id' => 'exists:users,id',
            'doctor_id' => 'required|exists:doctors,id',
            'patient_name' => 'required|string',
            'patient_gender' => 'required|string',
            'patient_age' => 'required|integer',
            'sickness_details' => 'required|string',
            'phone' => 'required|string',
            'address' => 'required|string',
            'expected_date_time' => 'required|date'
        ];
    }

    public function validated()
    {
        $doctor = Doctor::find($this->doctor_id);

        return array_merge(parent::validated(), [
            'price' => $doctor->price,
            'share' => $doctor->share,
            'discount' => $doctor->discount
        ]);
    }
}
