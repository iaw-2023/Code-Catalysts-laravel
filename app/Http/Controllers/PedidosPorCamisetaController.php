<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modeloPedido;

class PedidosPorCamisetaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $validated = request()->validate([
            'camiseta' => ['required','exists:camiseta,descripcion'],
        ]);
        $camiseta = request()->get('camiseta');
        $pedidos = ModeloPedido::whereHas('detalles.camiseta', function ($query) use ($camiseta) { $query->where('descripcion', $camiseta); })->with('cliente', 'detalles.camiseta')
        ->get();
        $mensaje = " de la camiseta $camiseta";
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
