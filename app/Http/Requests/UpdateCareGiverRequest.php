<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCareGiverRequest extends FormRequest
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
            'name' => 'string',
            'email' => ['email', Rule::unique('care_givers')->ignore($this->care_giver->id)],
            'phone' => 'string',
            'password' => 'string',
            'gender' => 'string',
            'dob' => 'date',
            'address' => 'string',
            'bio' => 'string',
            'photo' => 'string'
        ];
    }
}
