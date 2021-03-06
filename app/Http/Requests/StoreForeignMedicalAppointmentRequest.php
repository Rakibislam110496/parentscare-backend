<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreForeignMedicalAppointmentRequest extends FormRequest
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
            'foreign_medical_location_id' => 'required|exists:foreign_medical_locations,id',
            'patient_name' => 'required|string',
            'patient_phone' => 'required|string',
            'patient_have_visa' => 'required|boolean',
            'patient_need_visa_processing' => 'required|boolean',
            'patient_need_doctor_appointment' => 'required|boolean',
            'patient_need_pre_counselling' => 'required|boolean',
            'patient_need_ticket_booking' => 'required|boolean',
            'patient_need_accommodation' => 'required|boolean',
            'patient_need_local_transportation' => 'required|boolean',
            'patient_need_hospital_admission' => 'required|boolean',
            'patient_need_air_ambulance' => 'required|boolean'
        ];
    }
}
