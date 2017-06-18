<?php

namespace Sistema_Web\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResidenteForaRequest extends FormRequest
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
            //objetos  de los campos en el html nombre,apellidopaterno,apellidoaterno,etc
            'Nombre'=>'required'|max:50,
            'ApellidoPaterno'=>'required'|max:30,
            'ApellidoMaterno'=>'required'max:30,
            'Matricula'=>'required'|max:10,
            'Proyecto'=>'required'|max:50,
            'Contraseña'=>'required'max:10,
            
            
            //
        ];
    }
}
