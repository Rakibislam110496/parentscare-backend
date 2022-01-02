<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNursePackageRequest extends FormRequest
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
            'is_special' => 'required|boolean',
            'duration' => 'required|integer',
            'price' => 'required|integer',
            'share' => 'required|integer',
            'discount' => 'required|integer'
        ];
    }
}
