<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PedidosPorEquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $equipo = request()->get('equipo');
        $pedidos = DB::table('pedido')
            ->join('detalle_pedido', 'pedido.id_pedido', '=', 'detalle_pedido.id_pedido')
            ->join('camiseta', 'camiseta.id_camiseta', '=', 'detalle_pedido.id_camiseta')
            ->join('cliente', 'cliente.id_cliente', '=', 'pedido.id_cliente')
            ->join('equipo', 'camiseta.id_equipo', '=', 'equipo.id_equipo')
            ->where('equipo.nombre',$equipo)
            ->select('pedido.*', 'detalle_pedido.*', 'camiseta.*', 'cliente.*')
            ->get();
        return view('Pedido.index')->with('pedidos',$pedidos);
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
