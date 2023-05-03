<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CamisetasPorLigaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $liga = request()->get('liga');
        $reportes = DB::table('liga')
            ->join('equipo', 'liga.id_liga', '=', 'equipo.id_liga')
            ->join('camiseta', 'equipo.id_equipo', '=', 'camiseta.id_equipo')
            ->where('liga.nombre',$liga)
            ->get();
        return view('Camiseta.index')->with("camisetas",$reportes);
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
