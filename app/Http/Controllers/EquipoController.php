<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modeloEquipo;
use App\Models\modeloLiga;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $equipos = modeloEquipo::with(['liga'])->get();
        return view('Equipo.index')->with('equipos',$equipos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ligas = modeloLiga::all();
        return view('Equipo.create')->with('ligas',$ligas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => ['required'],
            'liga' => ['required','exists:liga,nombre'],
        ]);
        $liga = modeloLiga::where('nombre', $request->get('liga'))->first();
        $equipo = new modeloEquipo();
        $equipo->nombre = $request->get('nombre');
        $equipo->id_liga = $liga->id_liga;
        $equipo->created_at = now();
        $equipo->updated_at = now();
        $equipo->save();
        return redirect('/equipos');
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
        $equipo = ModeloEquipo::find($id);
        $ligas = ModeloLiga::whereNotIn('id_liga',[$equipo->id_liga])->get();
        return view('Equipo.edit')->with('equipo', $equipo)->with('ligas', $ligas);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nombre' => ['required'],
            'liga' => ['required','exists:liga,nombre'],
        ]);
        $liga = modeloLiga::where('nombre', $request->get('liga'))->first();
        $equipo = modeloEquipo::find($id);
        $equipo->nombre = $request->get('nombre');
        $equipo->id_liga = $liga->id_liga;
        $equipo->updated_at = now();
        $equipo->save();
        return redirect('/equipos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
