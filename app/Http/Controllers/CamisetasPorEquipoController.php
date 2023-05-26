<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modeloCamiseta;

class CamisetasPorEquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $equipo = request()->get('equipo');
        $reportes = ModeloCamiseta::whereHas('equipo', function ($query) use ($equipo) { $query->where('nombre', $equipo); })
        ->get();
        $mensaje = " de $equipo"; 
        return view('Camiseta.index')->with("camisetas", $reportes)->with("mensaje", $mensaje);
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
