<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class StoreUserSignupRequest extends FormRequest
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
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6',
            'phone' => 'required|string|min:11|max:15|unique:users',
            'address' => 'required|string'
        ];
    }

    public function validated()
    {
        $phone = substr(strrev($this->phone), 0, 11);

        $phone = '88'.strrev($phone);

        return array_merge(parent::validated(), ['password' => Hash::make($this->input('password')), 'phone' => $phone]);
    }
}
