<?php

namespace Sistema_Web\Http\Controllers;
use Illuminate\Http\Request;

//use Sistema_Web\Http\Request;
//Agregamos el modelo
use Sistema_Web\Residente;
use Illuminate\Support\Facades\Redirect;
use Sistema_Web\Http\Requests\ResidenteForaRequest;
use Sistema_Web\Http\Requests\EmpresaForaRequest;
use DB;

class ResidenteController extends Controller
{

    public function _construct()
    {
      $this->middleware('auth');

    }
    public function index( ){
    }
    public function create(){

        return view('usuario.create');
    }
    public function store(Request $request){
       $this->validate(request(), [
                'NombreProyecto' => ['required','String','min:10'],
                'ProyectoPdf'=> ['required'],
        ]);
        $residente=new Residente;
        $residente->NombreProyecto=$request->get('NombreProyecto');
        $residente->ProyectoPdf=$request->get('ProyectoPdf');
        $residente->save();
       return view('usuario.create');
    }
    public function show(){
        return 'usuario.create';
    }
    public function edit(){
    }
    public function update(){
    }
    public function destroy(){
    }
}
