<?php

namespace App\Http\Requests;

use App\Models\Nurse;
use App\Models\NursePackage;
use Illuminate\Foundation\Http\FormRequest;

class StoreNurseAppointmentRequest extends FormRequest
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
            'nurse_id' => 'required|exists:nurses,id',
            'nurse_package_id' => 'exists:nurse_packages,id',
            'patient_name' => 'required|string',
            'patient_gender' => 'required|string',
            'patient_age' => 'required|integer',
            'sickness_details' => 'required|string',
            'expected_date' => 'required|date',
            'duration' => 'required|integer',
            'phone' => 'required|string',
            'address' => 'required|string'
        ];
    }

    public function validated()
    {
        $nurse = Nurse::find($this->nurse_id);

        $this->merge([
            'price' => $nurse->price,
            'share' => $nurse->share,
            'discount' => $nurse->discount
        ]);

        if($this->has('nurse_package_id')){
            $package = NursePackage::find($this->nurse_package_id);

            $this->merge([
                'price' => $package->price,
                'share' => $package->share,
                'discount' => $package->discount,
                'duration' => $package->duration
            ]);
        }

        return $this->toArray();
    }
}
