<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNurseRequest extends FormRequest
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
            "name" => "required|string|max:50",
            "email" => "required|email|unique:nurses",
//            "password" => "required|string",
            "phone" => "required|string",
            "designation" => "required|string",
            "dob" => "required|date",
            "gender" => "required|string",
            "location" => "required|string",
            "is_special" => "required|boolean",
            "bio" => "required|string",
            "photo" => "required|string",
            "price" => "required|integer",
            "share" => "required|integer",
            "discount" => "required|integer"
        ];
    }
}
