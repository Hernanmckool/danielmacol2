<?php

namespace daniel\Http\Requests;

use daniel\Http\Requests\Request;

class ArticuloRequest extends Request
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
            'articulo'=>'required',
            'titulo'=>'required',
            'id_categoria'=>'required',
        ];
    }
}
