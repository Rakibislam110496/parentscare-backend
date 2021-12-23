<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCareGiverRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|email|unique:care_givers',
            'phone' => 'required|string',
            'password' => 'required|string',
            'gender' => 'required|string',
            'dob' => 'required|date',
            'address' => 'required|string',
            'bio' => 'required|string',
            'photo' => 'required|string'
        ];
    }
}
