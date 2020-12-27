<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomRequest extends FormRequest
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
            'price' => 'required|numeric',
            'description' => 'required',
            'type' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Vui lòng điền tên",
            'price.required' => "Vui lòng nhập giá",
            'price.numeric' => "Vui lòng nhập đúng định dạng",
            'description.required' => "Vui lòng nhập mô tả",
            'type.require' => "Vui lòng nhập loại phòng",
        ];
    }
}
