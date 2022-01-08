<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGlobalPackageRequest extends FormRequest
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
            'amount' => 'integer',
            'validity' => 'integer',
            'discount' => 'integer',
            'share' => 'integer',
            'description' => 'string',
            'is_active' => 'boolean'
        ];
    }
}
