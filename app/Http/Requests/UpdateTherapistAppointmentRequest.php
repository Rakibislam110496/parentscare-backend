<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTherapistAppointmentRequest extends FormRequest
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
            'therapist_id' => 'exists:therapists,id',
            'patient_name' => 'string',
            'patient_gender' => 'string',
            'patient_age' => 'integer',
            'sickness_details' => 'string',
            'duration' => 'integer',
            'phone' => 'string',
            'address' => 'string',
            'expected_date' => 'date',
            'appointment_date' => 'date'
        ];
    }
}
