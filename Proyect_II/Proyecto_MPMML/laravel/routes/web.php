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

Route::get('/', function () {
    return view('welcome');
});
Route::apiResource('Inicio', 'MenuController');
Route::apiResource('Productos', 'ProductoController');
Route::apiResource('Contactos', 'ContactoController');
Route::apiResource('Iniciar_Sesion', 'LoginController');

//Adminsitrador
Route::get('Administrador','AdministradorController@index');
Route::resource('Cliente','ClienteController');
Route::resource('Proveedor','ProveedorController');
Route::resource('Venta','VentaController');
Route::resource('Almacen','AlmacenController');
Route::resource('Boleta','BoletaController');