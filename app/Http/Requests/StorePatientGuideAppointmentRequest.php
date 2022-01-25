<?php

namespace App\Http\Requests;

use App\Models\PatientGuide;
use Illuminate\Foundation\Http\FormRequest;

class StorePatientGuideAppointmentRequest extends FormRequest
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
            'patient_guide_id' => 'required|exists:patient_guides,id',
            'patient_name' => 'required|string',
            'patient_gender' => 'required|string',
            'patient_age' => 'required|integer',
            'sickness_details' => 'required|string',
            'duration' => 'required|integer',
            'phone' => 'required|string',
            'address' => 'required|string',
            'expected_date' => 'required|date'
        ];
    }

    public function validated()
    {
        $patientGuide = PatientGuide::find($this->patient_guide_id);

        return array_merge(parent::validated(), [
            'price' => $patientGuide->price,
            'share' => $patientGuide->share,
            'discount' => $patientGuide->discount
        ]);
    }
}
