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


Route::get('/', 'PrincipalController@indexView')->name('indexRoute');
Route::get('/principal', 'PrincipalController@indexView')->name('indexRou');


Route::get('/principal/Cupones','PrincipalController@ConsultaPersonalPDF')->name('DescargarPDF');



//paquetes
// Abre vista de nuevo paquete
Route::get('/home/nuevo_paquete','PaqueteController@vistaRegistrarPaquete')->name('vistaRegistrarPaquete');

// reguistra un nuevo paquete
Route::get('/home/nuevo_paquete/registrar/{paquete}/{descripcion?}/{precio?}','PaqueteController@RegistrarPaquete')->name('RegistrarPaquete');

//abre el listado de paquetes para administrador
Route::get('/listado_paquete','PaqueteController@ListadoPaquetes')->name('vistaListadoPaquetes');
Route::get('/cargar/tabla/paquetes','PaqueteController@mostrarTablaPersona')->name('mostrarTablaPersona');
Route::get('/eliminar/tabla/paquetes/{id}','PaqueteController@eliminarTablaPaquetes')->name('eliminarTablaPaquetes');
Route::get('/modificar/paquetes/{id}/{paquete}/{descripcion?}/{precio?}','PaqueteController@modificarpaquete')->name('modificarpaquete');

//abre el listado de paquetes para administrador
Route::get('/listado_paquete_usuario','PaqueteController@ListadoPaquetesUsuario')->name('ListadoPaquetesUsuario');

//fin paquetes


Route::get('/home', 'UsuarioController@principal')->name('usuarioPrincipal');

//Login
Route::post('/principal/Verifica','PrincipalController@Login')->name('principal.Login');


Route::get('/registro', function () {
    return view('Index/registro');
});

Auth::routes();

//hasta aqui carm,ociinternaldebug

Route::get('/registro', function () {
    return view('Index/registro');
});


Route::post('/principal', 'PrincipalController@store')->name('principal.store');


//Personal
Route::get('/nuevo_personal','PersonalController@vistaRegistrarPersonal')->name('vistaRegistrarPersonal');
Route::get('/nuevo_personal/registrar/{nom}/{ap?}/{am?}/{direccion?}/{correo?}/{tel?}/{contra?}/{t_us?}','PersonalController@RegistrarPersonal')->name('vistaRegistrarPersonal');


//Fin Personal

//Roles
Route::get('/Roles','RolesController@vistaRoles')->name('vistaRoles');
Route::get('/get-roles-permisos', 'RolesController@getRoles')->name('getRoles');
