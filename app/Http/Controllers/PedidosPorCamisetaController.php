<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PedidosPorCamisetaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $camiseta = request()->get('camiseta');
        $pedidos = DB::table('pedido')
            ->join('detalle_pedido', 'pedido.id_pedido', '=', 'detalle_pedido.id_pedido')
            ->join('camiseta', 'camiseta.id_camiseta', '=', 'detalle_pedido.id_camiseta')
            ->join('cliente', 'cliente.id_cliente', '=', 'pedido.id_cliente')
            ->where('descripcion',$camiseta)
            ->select('pedido.*', 'detalle_pedido.*', 'camiseta.*', 'cliente.*')
            ->get();
        $mensaje = " de la camiseta $camiseta";
        return view('Pedido.index')->with('pedidos',$pedidos)->with('mensaje',$mensaje);
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
