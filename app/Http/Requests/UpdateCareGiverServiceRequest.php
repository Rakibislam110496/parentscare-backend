<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCareGiverServiceRequest extends FormRequest
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
            'slug' => ['string', Rule::unique('care_giver_services')->ignore($this->care_giver_service->id)],
            'price' => 'integer',
            'discount' => 'integer',
            'share' => 'integer',
            'is_active' => 'boolean'
        ];
    }
}
