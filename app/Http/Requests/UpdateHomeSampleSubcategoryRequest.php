<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateHomeSampleSubcategoryRequest extends FormRequest
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
            'home_sample_category_id' => 'exists:home_sample_categories,id',
            'name' => 'string',
            'slug' => ['string', Rule::unique('home_sample_subcategories')->ignore($this->home_sample_subcategory->id)],
            'price' => 'integer',
            'discount' => 'integer',
            'share' => 'integer'
        ];
    }
}
