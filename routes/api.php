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
