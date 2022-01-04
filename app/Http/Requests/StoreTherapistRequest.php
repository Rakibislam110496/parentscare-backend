<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTherapistRequest extends FormRequest
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
            'therapist_location_id' => 'required|exists:therapist_locations,id',
            "name" => "required|string|max:50",
            "email" => "required|email|unique:therapists",
//            "password" => "required|string",
            "phone" => "required|string",
            "dob" => "required|date",
            "gender" => "required|string",
            "bio" => "required|string",
            "photo" => "required|string",
            "availabilities" => "required|string"
        ];
    }
}
