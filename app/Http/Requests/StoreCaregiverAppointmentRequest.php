<?php

namespace App\Http\Requests;

use App\Models\CareGiverService;
use Illuminate\Foundation\Http\FormRequest;

class StoreCaregiverAppointmentRequest extends FormRequest
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
            'care_giver_id' => 'exists:care_givers,id',
            'care_giver_service_id' => 'required|exists:care_giver_services,id',
            'patient_name' => 'required|string',
            'patient_gender' => 'required|string',
            'patient_age' => 'required|integer',
            'sickness_details' => 'required|string',
            'patient_phone' => 'required|string',
            'patient_address' => 'required|string',
            'care_giver_type' => 'required|string',
            'expected_date' => 'required|date',
            'duration' => 'required|integer'
        ];
    }

    public function validated()
    {
        $careGiverService = CareGiverService::find($this->care_giver_service_id);

         return array_merge(parent::validated(), [
             'price' => $careGiverService->price,
             'share' => $careGiverService->share,
             'discount' => $careGiverService->discount
         ]);
    }
}
