<?php

namespace Sistema_Web\Http\Controllers;

use Illuminate\Http\Request;

namespace Sistema_Web\Http\Controllers;
use Illuminate\Http\Request;

//use Sistema_Web\Http\Request;
//Agregamos el modelo
use Sistema_Web\Solicitud;
use Sistema_Web\Empresa;
use Illuminate\Support\Facades\Redirect;
use Sistema_Web\Http\Requests\SolicitudForaRequest;
use Sistema_Web\Http\Requests\EmpresaForaRequest;
use DB;
use Sistema_Web\Http\Requests;
use Sistema_Web\Http\Requests\SolicitudRequest;
class usuariosolicitudcontroller extends Controller
{

    public function _construct()
    {
      $this->middleware('auth');
    }


    public function index( ){


    }
    public function create(){


    }
    public function store(SolicitudRequest $request){


       $empresa= new Empresa;
       $empresa->RfcEmpresa=$request->get('RfcEmpresa');
       $empresa->TipoEmpresa=$request->get('OpcionTipoGiro');
       $empresa->Domicilio=$request->get('DomicilioEmpresa');
       $empresa->Colonia=$request->get('Colonia');
       $empresa->CodigoPostal=$request->get('CodigoPostal');
       $empresa->Fax=$request->get('Fax');
       $empresa->Ciudad=$request->get('CiudadEmpresa');
       $empresa->TelefonoCelular=$request->get('Telefono');
       $empresa->MisionEmpresa=$request->get('Mision');
       $empresa->NombreTitular=$request->get('NombreTitularEmpresa');
       $empresa->PuestoTitular=$request->get('PuestoTitular');
       $empresa->NombreExterno=$request->get('NombreAsesorExterno');
       $empresa->PuestoExterno=$request->get('PuestoAsesorExterno');
       $empresa->NombreAcuerdo=$request->get('NombrePersonaAcuerdo');
       $empresa->PuestoAcuerdo=$request->get('PuestoEncargado');
       $empresa->save();


}
    public function show(){
        return view('registroResidente');
    }
    public function edit(){

    }


    public function update(){

    }
    public function destoy(){

    }


}
