<?php

namespace daniel\Http\Requests;

use daniel\Http\Requests\Request;

class LoginRequest extends Request
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
            'email'=>'required',
            'password'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'El campo Email no puede estar vacio',
            'password.required' => 'El campo Password no puede estar vacio',
        ];
    }

}
