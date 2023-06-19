<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('camisetas','App\Http\Controllers\ApiController@camisetas');
Route::get('equipos','App\Http\Controllers\ApiController@equipos');
Route::get('ligas','App\Http\Controllers\ApiController@ligas');
Route::get('camisetas/equipo/{id}','App\Http\Controllers\ApiController@camisetasPorEquipo');
Route::get('camisetas/liga/{id}','App\Http\Controllers\ApiController@camisetasPorLiga');
Route::post('pedido','App\Http\Controllers\ApiController@pedido');
Route::get('camiseta/{id}','App\Http\Controllers\ApiController@camisetasPorId');
Route::get('equipos/liga/{id}','App\Http\Controllers\ApiController@equiposPorLiga');
Route::get('liga/{id}','App\Http\Controllers\ApiController@ligaPorId');
Route::get('equipo/{id}','App\Http\Controllers\ApiController@equipoPorId');
Route::post('login', 'App\Http\Controllers\ApiController@login');
Route::post('register', 'App\Http\Controllers\ApiController@register');
Route::get('pedidos/{email}','App\Http\Controllers\ApiController@pedidosPorEmail');