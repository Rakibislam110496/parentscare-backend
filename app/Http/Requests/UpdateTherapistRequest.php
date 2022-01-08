<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateTherapistRequest extends FormRequest
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
            'therapist_location_id' => 'exists:therapist_locations,id',
            "name" => "string|max:50",
            "email" => ["email", Rule::unique('therapists')->ignore($this->therapist->id)],
//            "password" => "string",
            "phone" => "string",
            "dob" => "date",
            "gender" => "string",
            "bio" => "string",
            "photo" => "string",
            "availabilities" => "string",
            "is_active" => "boolean"
        ];
    }
}
