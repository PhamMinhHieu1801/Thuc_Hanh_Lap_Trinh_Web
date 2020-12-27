<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateRequest extends FormRequest
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
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'date_in' => 'required',
            'date_out' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Vui lòng nhập tên",
            'email.required' => "Vui lòng nhập email",
            'address.required' => "Vui lòng nhập địa chỉ",
            'phone.required' => "Vui lòng nhập số điện thoại",
            'phone.numeric' => "Số điện thoại không đúng định dạng",
            'date_in.required' => "Vui lòng nhập ngày thuê phòng",
            'date_out.required' => "Vui lòng nhập ngày",
        ];
    }
}
