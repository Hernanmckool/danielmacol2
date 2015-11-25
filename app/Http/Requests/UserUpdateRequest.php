<?php

namespace daniel\Http\Requests;

use daniel\Http\Requests\Request;

class UserUpdateRequest extends Request
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
            'nombre'=>'required',
            'apellido'=>'required',
            'email'=>'required|email|unique:users',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El campo Nombre no puede estar vacio',
            'apellido.required' => 'El campo Apellido no puede estar vacio',
            'email.required' => 'El campo Email no puede estar vacio',
            'email.unique' => 'El Email ya existe en el sistema',
        ];
    }    
}
