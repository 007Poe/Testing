<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'category_id' => 'required',
            'sub_category_id' => 'required',
            'name' => 'required',
            'product_code' => 'required',
            'model' => 'required',
            'size' => 'required',
            'price' => 'required',
            'product_image' => 'required',
            'qty' => 'required',
            'description' => 'required',
            'service' => 'required',
            'specific_label.*' => 'required_unless:type_of_content,is_information',
            'specific_value.*' => 'required_unless:type_of_content,is_information'
        ];
    }
}
