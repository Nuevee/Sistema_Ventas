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
//listar clientes
Route::get('/','App\Http\Controllers\ClientesController@listar');
//formulario de clientes
Route::get('/clientes','App\Http\Controllers\ClientesController@clientesform');
//guardar clientes
Route::post('/guardar','App\Http\Controllers\ClientesController@guardar')->name('guardar');
