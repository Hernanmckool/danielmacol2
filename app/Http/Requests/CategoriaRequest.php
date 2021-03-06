<?php

namespace daniel\Http\Requests;

use daniel\Http\Requests\Request;

class CategoriaRequest extends Request
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
        'categoria'=>'required',
        'id_seccion'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'categoria.required' => 'El campo Categoria no puede estar vacio',
            'id_seccion.required' => 'El campo Seccion no puede estar vacio',
        ];
    }

}
