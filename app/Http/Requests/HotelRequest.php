<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HotelRequest extends FormRequest
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
            'name' => 'required',
            'local' => 'required',
            'description' => 'required',
            'breakfast' => 'required',
            'wifi' => 'required',
            'car_park' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => "Vui lòng điền tên",
            'local.required' => "Vui lòng nhập địa chỉ",
            'description.required' => "Vui lòng nhập mô tả",
        ];
    }
}
