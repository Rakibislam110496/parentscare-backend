<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHomeSampleAppointmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'home_sample_subcategories_id' => 'exists:home_sample_subcategories,id',
            'patient_name' => 'string',
            'patient_gender' => 'string',
            'patient_age' => 'integer',
            'test_details' => 'string',
            'phone' => 'string',
            'address' => 'string',
            'expected_date' => 'date',
            'appointment_date' => 'date',
            'status' => 'string'
        ];
    }
}
