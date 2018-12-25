<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationReq extends FormRequest
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
            'name'          =>  'required',
            'regEmail'      =>  'bail | required | email | unique:tbl_user,email',
            'phone'         =>  'required',
            'address'       =>  'required',
            'regPassword'   =>  'required',
            'regCPassword'  =>  'same:regPassword'
        ];
    }
    public function messages()
    {
        return [
            'name.required'         =>  'Name required',
            'regEmail.required'     =>  'Email required',
            'regEmail.email'        =>  'Invalid email',
            'regEmail.unique'       =>  'Email already used',
            'regPassword.required'  =>  'Password required',
            'regCPassword.same'     =>  'Password not matched',
        ];
    }
}
