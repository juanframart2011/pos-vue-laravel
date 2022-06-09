<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('Categoria/add','API\CategoriaController@add');
Route::get('Categoria/list','API\CategoriaController@list');
Route::get('Categoria/disponible','API\CategoriaController@avalaible');
Route::post('Categoria/change-status','API\CategoriaController@change_status');
Route::post('Producto/create','API\ProductoController@create');

Route::get('Producto/list','API\ProductoController@list');
Route::post('Producto/change-status','API\ProductoController@change_status');

Route::get('Producto/visible','API\ProductoController@visible');