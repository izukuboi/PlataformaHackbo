<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::resource('cliente','ClienteController');

Route::resource('inicio', 'InicioController');

Route::resource('registro','RegistroController');

Route::resource('quienessomos', 'QuienesSomosController');

Route::resource('registrarproyecto', 'RegistrarProyectoController');
Route::resource('proyecto', 'ProyectoController');

Route::any('/usuario', 'UsuarioController@ActionIndex');

//Route::resource('/usuario/c','UsuarioController');


Route::resource('publicaproyecto', 'PublicaProyectoController');
Route::resource('emprendedor','EmprendedorController');
Route::resource('patrocinador','PatrocinadorController');
Route::resource('consultor', 'ConsultorController');

Route::resource('Login', 'LoginController');


Route::get('/', function () {
    return view('Inicio/pagReg');
});
Route::get('/prueba', function () {
    return view('Inicio.InicioCliente');
});

Route::get('/Pruebalogin', function () {
    return view('Login/Login');
});

Route::get('/PruebaAngel', function () {  /* Hubo cambios en esta partee!!! */
    return view('Proyecto/DetallesProyecto');
});
