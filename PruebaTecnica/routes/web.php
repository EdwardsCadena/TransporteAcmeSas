<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', function(){
    return view('Layout.welcome');
});
Route::resource('usuario','UsuarioController');
Route::resource('marca','MarcaController');
Route::resource('rol','RolController');
Route::resource('ciudad','CiudadController');
Route::resource('vehiculo','VehiculoController');
Route::resource('color','ColorController');
Route::resource('tipovehiculo','TipoVehiculoController');

