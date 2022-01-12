<?php

namespace App\Http\Requests;

use App\Models\HomeSampleSubcategory;
use Illuminate\Foundation\Http\FormRequest;

class StoreHomeSampleAppointmentRequest extends FormRequest
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
            'user_id' => 'exists:users,id',
            'home_sample_subcategories_id' => 'required|exists:home_sample_subcategories,id',
            'patient_name' => 'required|string',
            'patient_gender' => 'required|string',
            'patient_age' => 'required|integer',
            'test_details' => 'required|string',
            'phone' => 'required|string',
            'address' => 'required|string',
            'expected_date' => 'required|date'
        ];
    }

    public function validated()
    {
        $test = HomeSampleSubcategory::find($this->home_sample_subcategories_id);

        $this->merge([
            'price' => $test->price,
            'share' => $test->share,
            'discount' => $test->discount
        ]);

        return $this->toArray();
    }
}
