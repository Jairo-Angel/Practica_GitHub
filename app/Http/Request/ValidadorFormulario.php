<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class ValidadorFormulario extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'txtNombre'=>'required',
            'txtColor'=>'required',
            'txtCantidad'=>'required',
            'txtDescripcion'=>'required',
            'txtCosto'=>'required'
            
            


        ];
    }
}