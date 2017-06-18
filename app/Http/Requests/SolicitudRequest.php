<?php

namespace Sistema_Web\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SolicitudRequest extends FormRequest
{
  
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'RfcEmpresa'=>['required','min:3'],
            'Colonia'=>'required',',min:5',
            'CodigoPostal'=>'required',
            'Fax'=>'required',
            'Mision'=>'required',
            'DomicilioEmpresa'=>'required',
            'CiudadEmpresa'=>'required',
            'Telefono'=>'required',
            'NombreTitularEmpresa'=>'required',
            'PuestoTitular'=>'required',
            'NombreAsesorExterno'=>'required',
            'PuestoAsesorExterno'=>'required',
            'NombrePersonaAcuerdo'=>'required',
            'PuestoEncargado'=>'required',           
        ];
    }
}
