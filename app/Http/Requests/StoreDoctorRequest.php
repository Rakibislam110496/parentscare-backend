<?php

namespace App\Http\Requests;

use App\Models\Doctor;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreDoctorRequest extends FormRequest
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
            "doctor_department_id" => 'required|exists:doctor_departments,id',
            "name" => "required|string|max:50",
            "email" => "required|email|unique:doctors",
            "password" => "required|string",
            "phone" => "required|string",
            "speciality" => "required|string",
            "dob" => "required|date",
            "gender" => "required|string",
            "degree" => "required|string",
            "bio" => "required|string",
            "photo" => "required|string",
            "price" => "required|integer",
            "share" => "required|integer",
            "discount" => "required|integer"
        ];
    }
}
