<?php

namespace App\Http\Requests;

use App\Models\Therapist;
use Illuminate\Foundation\Http\FormRequest;

class StoreTherapistAppointmentRequest extends FormRequest
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
            'therapist_id' => 'required|exists:therapists,id',
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
        $therapist = Therapist::find($this->therapist_id);

        return array_merge(parent::validated(), [
            'price' => $therapist->location->price,
            'share' => $therapist->location->share,
            'discount' => $therapist->location->discount
        ]);
    }
}
