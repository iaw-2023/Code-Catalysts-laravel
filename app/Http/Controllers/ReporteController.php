<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modeloCliente;

class ReporteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Reporte.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "BBB";
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
        switch($id) {
            case 'pedidos-por-tiempo':
                return view('Reporte.pedidos-por-tiempo');
                break; 
            case 'pedidos-por-cliente':
                $clientes = modeloCliente::all();
                return view('Reporte.pedidos-por-cliente')->with('clientes',$clientes);
                break; 
            case 'pedidos-por-camiseta':
                return view('Reporte.pedidos-por-camiseta');
                break; 
            case 'pedidos-por-equipo':
                return view('Reporte.pedidos-por-equipo');
                break; 
            case 'pedidos-por-liga':
                return view('Reporte.pedidos-por-liga');
                break; 
            case 'camisetas-por-equipo':
                return view('Reporte.camisetas-por-equipo');
                break; 
            case 'camisetas-por-liga':
                return view('Reporte.camisetas-por-liga');
                break; 
        }
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

    public function pedidosPorTiempo(Request $request) {
        return "AAAA";
    }
}
