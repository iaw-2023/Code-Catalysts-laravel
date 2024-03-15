<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\modeloCliente;
use App\Models\modeloCamiseta;
use App\Models\modeloEquipo;
use App\Models\modeloLiga;

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
Route::resource('camisetas/create','App\Http\Controllers\CamisetaController')->middleware(['auth', 'empleado']);
Route::resource('camisetas/{camiseta}/edit','App\Http\Controllers\CamisetaController')->middleware(['auth', 'empleado']);
Route::resource('ligas','App\Http\Controllers\LigaController')->middleware(['auth', 'verified']);
Route::resource('ligas/create','App\Http\Controllers\LigaController')->middleware(['auth', 'empleado']);
Route::resource('ligas/{liga}/edit','App\Http\Controllers\LigaController')->middleware(['auth', 'empleado']);
Route::resource('equipos','App\Http\Controllers\EquipoController')->middleware(['auth', 'verified']);
Route::resource('equipos/create','App\Http\Controllers\EquipoController')->middleware(['auth', 'empleado']);
Route::resource('equipos/{equipo}/edit','App\Http\Controllers\EquipoController')->middleware(['auth', 'empleado']);
Route::resource('clientes','App\Http\Controllers\ClienteController')->middleware(['auth', 'verified']);
Route::resource('pedidos','App\Http\Controllers\PedidoController')->middleware(['auth', 'verified']);
Route::resource('reportes','App\Http\Controllers\ReporteController')->middleware(['auth', 'verified']);
Route::resource('empleados','App\Http\Controllers\EmpleadoController')->middleware(['auth', 'administrador']);
Route::resource('empleados/create','App\Http\Controllers\EmpleadoController')->middleware(['auth', 'administrador']);
Route::delete('empleados/{empleado}', 'App\Http\Controllers\EmpleadoController@destroy')->name('empleados.destroy')->middleware(['auth', 'verified']);
Route::resource('datos-personales','App\Http\Controllers\DatosPersonalesController')->middleware(['auth', 'verified']);
Route::resource('noticias','App\Http\Controllers\NoticiasController')->middleware(['auth', 'verified']);

Route::get('/reporte/pedidos-por-tiempo', function () {
    return view('Reporte.pedidos-por-tiempo');
})->middleware(['auth', 'verified']);

Route::get('/reporte/pedidos-por-cliente', function () {
    $clientes = modeloCliente::all();
    return view('Reporte.pedidos-por-cliente')->with('clientes',$clientes);
})->middleware(['auth', 'verified']);

Route::get('/reporte/pedidos-por-camiseta', function () {
    $camisetas = modeloCamiseta::all();
    return view('Reporte.pedidos-por-camiseta')->with('camisetas',$camisetas);
})->middleware(['auth', 'verified']);

Route::get('/reporte/pedidos-por-equipo', function () {
    $equipos = modeloEquipo::all();
    return view('Reporte.pedidos-por-equipo')->with('equipos',$equipos);
})->middleware(['auth', 'verified']);

Route::get('/reporte/pedidos-por-liga', function () {
    $ligas = modeloLiga::all();
    return view('Reporte.pedidos-por-liga')->with('ligas',$ligas);
})->middleware(['auth', 'verified']);

Route::get('/reporte/camisetas-por-equipo', function () {
    $equipos = modeloEquipo::all();
    return view('Reporte.camisetas-por-equipo')->with('equipos',$equipos);
})->middleware(['auth', 'verified']);

Route::get('/reporte/camisetas-por-liga', function () {
    $ligas = modeloLiga::all();
    return view('Reporte.camisetas-por-liga')->with('ligas',$ligas);
})->middleware(['auth', 'verified']);

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
