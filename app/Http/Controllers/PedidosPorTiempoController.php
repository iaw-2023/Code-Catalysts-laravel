<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modeloPedido;

class PedidosPorTiempoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $validated = request()->validate([
            'inicio' => ['required','date'],
            'fin' => ['required','date'],
        ]);
        $inicio = request()->get('inicio');
        $fin = request()->get('fin');
        $pedidos = ModeloPedido::with(['detalles.camiseta', 'cliente'])->whereBetween('fecha', [$inicio, $fin])
        ->get();
        $mensaje = " desde $inicio hasta $fin";
        return view('Pedido.index')->with('pedidos', $pedidos)->with('mensaje', $mensaje);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
