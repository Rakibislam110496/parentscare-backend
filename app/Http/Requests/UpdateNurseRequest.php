<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateNurseRequest extends FormRequest
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
            "email" => ["email", Rule::unique('nurses')->ignore($this->nurse->id)],
            "password" => "string",
            "phone" => "string",
            "designation" => "string",
            "dob" => "date",
            "gender" => "string",
            "location" => "string",
            "is_special" => "boolean",
            "bio" => "string",
            "photo" => "string",
            "price" => "integer",
            "share" => "integer",
            "discount" => "integer"
        ];
    }
}
