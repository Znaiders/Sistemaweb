<?php
//Inicio de pagina web
Route::get('/', function () {
    return view('index');
});
//
//Route::resource('usuario','ResidenteController');
//Controlador del datos usuario
Route::resource('Solicitud','usuariosolicitudcontroller');
//Route::get('Solicitud','usuariosolicitudcontroller@index');
//Obtenemos un documento pdf
Route::get('/vista', function () {
  $pdf = PDF::loadView('vista');
  return $pdf->download('pruebapdf.pdf');
});
Auth::routes();

Route::get('home', 'HomeController@index');
