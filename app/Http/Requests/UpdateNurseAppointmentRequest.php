<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNurseAppointmentRequest extends FormRequest
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
            'nurse_id' => 'exists:nurses,id',
            'nurse_package_id' => 'exists:nurse_packages,id',
            'patient_name' => 'string',
            'patient_gender' => 'string',
            'patient_age' => 'integer',
            'sickness_details' => 'string',
            'expected_date' => 'date',
            'duration' => 'integer',
            'phone' => 'string',
            'address' => 'string',
            'appointment_date' => 'date',
            'status' => 'string'
        ];
    }
}
