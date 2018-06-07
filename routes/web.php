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

Route::resource('Inicio', 'InicioController');

Route::resource('Registro','RegistroController');

Route::resource('QuienesSomos', 'QuienesSomosController');

Route::resource('RegistrarProyecto', 'RegistrarProyectoController');
Route::resource('Proyecto', 'ProyectoController');


Route::resource('PublicaProyecto', 'PublicaProyectoController');
Route::resource('emprendedor','EmprendedorController');
Route::resource('patrocinador','PatrocinadorController');
Route::resource('consultor', 'ConsultorController');

Route::get('/', function () {
    return view('Inicio/pagReg');
});
Route::get('/prueba', function () {
    return view('Proyecto/vistaproy');
});

Route::get('/Pruebalogin', function () {
    return view('Login/Login');
});

Route::get('/PruebaAngel', function () {  /* Hubo cambios en esta partee!!! */
    return view('Proyecto/DetallesProyecto');
});
