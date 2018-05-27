<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'price'         =>  'bail | required | numeric',
            'discount'      =>  'bail | required | numeric | min:0',
            'image'         =>  'bail | image | mimes:jpeg,png',
            'category'      =>  'required',
            'company'       =>  'required',
            'status'        =>  'required',
            'details.*'     =>  'required',
            'specTitle.*'   =>  'required',
            'specDesc.*'    =>  'required',
        ];
    }
    public function messages()
    {
        return [
            'specTitle.*.required'   =>  'The specification title required',
            'specDesc.*.required'    =>  'The specification description required',
        ];
    }
}
