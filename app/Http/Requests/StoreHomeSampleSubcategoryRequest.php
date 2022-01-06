<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHomeSampleSubcategoryRequest extends FormRequest
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
            'home_sample_category_id' => 'required|exists:home_sample_categories,id',
            'name' => 'required|string',
            'price' => 'required|integer',
            'discount' => 'required|integer',
            'share' => 'required|integer'
        ];
    }
}
