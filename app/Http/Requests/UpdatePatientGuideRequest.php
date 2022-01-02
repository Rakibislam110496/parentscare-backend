<?php

namespace App\Http\Requests;

use App\Models\PatientGuide;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePatientGuideRequest extends FormRequest
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
            "name" => "string|max:50",
            "email" => ["email", Rule::unique('patient_guides')->ignore($this->patient_guide->id)],
//            "password" => "string",
            "phone" => "string",
            "dob" => "date",
            "gender" => "string",
            "location" => "string",
            "bio" => "string",
            "photo" => "string",
            "price" => "integer",
            "share" => "integer",
            "discount" => "integer"
        ];
    }
}
