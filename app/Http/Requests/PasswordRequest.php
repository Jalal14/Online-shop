<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PasswordRequest extends FormRequest
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
            'cPass' => 'bail | required',
            'newPass' => 'bail | required',
            'cNewPass' => 'bail | same:newPass',
        ];
    }
    public function messages()
    {
        return [
            'cPass.required'    =>  'Current password required',
            'newPass.required'     =>  'New password required',
            'cNewPass.same'    =>  'Password does not match',
        ];
    }
}
