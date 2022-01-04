<?php

namespace App\Http\Requests;

use App\Models\Doctor;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateDoctorRequest extends FormRequest
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
            "doctor_department_id" => 'exists:doctor_departments,id',
            "name" => "string|max:50",
            "email" => ['email', Rule::unique('doctors')->ignore($this->doctor->id)],
//            "password" => "string",
            "phone" => "string",
            "speciality" => "string",
            "dob" => "date",
            "gender" => "string",
            "degree" => "string",
            "bio" => "string",
            "photo" => "string",
            "price" => "integer",
            "share" => "integer",
            "discount" => "integer",
            "availabilities" => "string"
        ];
    }
}
