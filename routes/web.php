<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('camisetas','App\Http\Controllers\CamisetaController')->middleware(['auth', 'verified']);
Route::resource('ligas','App\Http\Controllers\LigaController')->middleware(['auth', 'verified']);
Route::resource('equipos','App\Http\Controllers\EquipoController')->middleware(['auth', 'verified']);
Route::resource('clientes','App\Http\Controllers\ClienteController')->middleware(['auth', 'verified']);
Route::resource('pedidos','App\Http\Controllers\PedidoController')->middleware(['auth', 'verified']);
Route::resource('reportes','App\Http\Controllers\ReporteController')->middleware(['auth', 'verified']);
Route::resource('camisetaPorEquipo','App\Http\Controllers\CamisetasPorEquipoController')->middleware(['auth', 'verified']);
Route::resource('camisetaPorLiga','App\Http\Controllers\CamisetasPorLigaController')->middleware(['auth', 'verified']);
Route::resource('pedidoPorCliente','App\Http\Controllers\PedidosPorClienteController')->middleware(['auth', 'verified']);
Route::resource('pedidoPorCamiseta','App\Http\Controllers\PedidosPorCamisetaController')->middleware(['auth', 'verified']);
Route::resource('pedidoPorLiga','App\Http\Controllers\PedidosPorLigaController')->middleware(['auth', 'verified']);
Route::resource('pedidoPorEquipo','App\Http\Controllers\PedidosPorEquipoController')->middleware(['auth', 'verified']);
Route::resource('pedidoPorTiempo','App\Http\Controllers\PedidosPorTiempoController')->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
