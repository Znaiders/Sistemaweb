<?php
namespace Sistema_Web\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //Usuario Administrador
      if(auth()->user()->email == 'esnaiderivan@gmail.com')
        {
          return view ('registroResidente');
          
        }else if(auth()->user()->email == 'oscar@gmail.com'){
          return view('vista');
      }else{
           Auth()->logout();
            //Flash()->success("Mensaje de prueba");
          //Redireccionamos al inicio de la app con un mensaje
           return view('auth.login')->with("message", "Usuario no Registrado¡");
      }
         
    }//fin funcion index
}
