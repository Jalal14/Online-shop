<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAdminRequest extends FormRequest
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
            'name'      =>  'bail | required',
            'email'     =>  'bail | required | email',
            'phone1'    =>  'required',
            'gender'    =>  'required',
            'dob'       =>  'required',
            'address'   =>  'required',
            'photo'     => 'bail | image | mimes:jpeg,png'
        ];
    }
}
