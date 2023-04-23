<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modeloCamiseta;
use App\Models\modeloEquipo;

class CamisetaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $camisetas = modeloCamiseta::all();
        return view('Camiseta.index')->with('camisetas',$camisetas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $equipos = modeloEquipo::all();
        return view('Camiseta.create')->with('equipos',$equipos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $equipo = modeloEquipo::where('nombre', $request->get('equipo'))->first();
        $camiseta = new modeloCamiseta();
        $camiseta->descripcion = $request->get('descripcion');
        $camiseta->precio = $request->get('precio');
        $camiseta->talles = $request->get('talles');
        $camiseta->imagen = $request->get('imagen');
        $camiseta->id_equipo = $equipo->id_equipo;
        $camiseta->estado = $request->get('estado');
        $camiseta->created_at = now();
        $camiseta->updated_at = now();
        $camiseta->save();
        return redirect('/camisetas');
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
        $equipos = modeloEquipo::all();
        $camiseta = modeloCamiseta::find($id);
        return view('Camiseta.edit')->with('camiseta',$camiseta)->with('equipos',$equipos);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $equipo = modeloEquipo::where('nombre', $request->get('equipo'))->first();
        $camiseta = modeloCamiseta::find($id);
        $camiseta->descripcion = $request->get('descripcion');
        $camiseta->precio = $request->get('precio');
        $camiseta->talles = $request->get('talles');
        $camiseta->imagen = $request->get('imagen');
        $camiseta->id_equipo = $equipo->id_equipo;
        $camiseta->estado = $request->get('estado');
        $camiseta->created_at = now();
        $camiseta->updated_at = now();
        $camiseta->save();
        return redirect('/camisetas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
