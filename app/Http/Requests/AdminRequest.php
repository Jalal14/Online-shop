<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
            'uname'     =>  'required',
            'name'      =>  'bail | required',
            'email'     =>  'bail | required | email | unique:tbl_admins,email',
            'pass'      =>  'required',
            'cPass'     =>  'same:pass',
            'contact1'  =>  'required',
            'gender'    =>  'required',
            'dob'       =>  'required',
            'address'   =>  'required',
            'photo'     => 'bail|required|image|mimes:jpeg,png'
        ];
    }
    public function messages()
    {
        return [
            'uname.required'    =>  'Username cannot be empty',
            'name.required'     =>  'Name required',
            'email.required'    =>  'Email required',
            'email.email'       =>  'Invalid email',
            'email.unique'      =>  'Email already used',
            'pass.required'     =>  'Password required',
            'cPass.same'        =>  'Password not matched',
            'contact1.required' =>  'Contact 1 required',
            'dob.required'      =>  'Date of birth required',
            'address.required'  =>  'Address required',
            'photo.required'    =>  'Upload a photo',
            'photo.image'       =>  'Upload a photo',
            'photo.mimes'       =>  'Upload a .jpeg or .png type photo'
        ];
    }
}
