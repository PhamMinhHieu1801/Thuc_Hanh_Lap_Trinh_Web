<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestHotelRequest extends FormRequest
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
            //
            'name' => 'required',
            'local' => 'required',
            'description' => 'required',
            'breakfast ' => 'required',
            'wifi' => 'required',
            'car_park' => 'required'
        ];
    }
}
