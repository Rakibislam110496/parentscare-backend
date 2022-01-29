<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCareGiverAppointmentRequest extends FormRequest
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
            'care_giver_id' => 'exists:care_givers,id',
            'care_giver_service_id' => 'exists:care_giver_services,id',
            'patient_name' => 'string',
            'patient_gender' => 'string',
            'patient_age' => 'integer',
            'sickness_details' => 'string',
            'phone' => 'string',
            'patient_address' => 'string',
            'care_giver_type' => 'string',
            'expected_date' => 'date',
            'duration' => 'integer',
            'appointment_date' => 'date',
            'status' => ['string', Rule::in(['pending', 'ongoing', 'completed'])]
        ];
    }
}
