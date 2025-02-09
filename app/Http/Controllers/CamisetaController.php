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
        $mensaje = "";
        $camisetas = modeloCamiseta::orderBy('id_camiseta', 'asc')->get();
        return view('Camiseta.index')->with('camisetas',$camisetas)->with('mensaje',$mensaje);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $equipos = modeloEquipo::orderBy('id_equipo', 'asc')->get();
        return view('Camiseta.create')->with('equipos',$equipos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'descripcion' => ['required'],
            'precio' => ['required','gte:1','numeric'],
            'talles' => ['required'],
            'imagen' => ['required', 'image'],
            'estado' => ['required'],
            'equipo' => ['required','exists:equipo,nombre'],
        ]);
        $equipo = modeloEquipo::where('nombre', $request->get('equipo'))->first();
        $camiseta = new modeloCamiseta();
        $camiseta->descripcion = $request->get('descripcion');
        $camiseta->precio = $request->get('precio');
        $camiseta->talles = $request->get('talles');
        $file = $request->file('imagen');//obtiene la imagen ingresada por el usuario
        $base64Image = base64_encode(file_get_contents($file->getRealPath()));//codifica la imagen en base64
        $camiseta->imagen = $base64Image;
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
        $camiseta = modeloCamiseta::find($id);
        $equipos = modeloEquipo::whereNotIn('id_equipo',[$camiseta->id_equipo])->get();
        return view('Camiseta.edit')->with('camiseta',$camiseta)->with('equipos',$equipos);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'descripcion' => ['required'],
            'precio' => ['required','gte:1','numeric'],
            'talles' => ['required'],
            'estado' => ['required'],
            'equipo' => ['required','exists:equipo,nombre'],
        ]);
        $equipo = modeloEquipo::where('nombre', $request->get('equipo'))->first();
        $camiseta = modeloCamiseta::find($id);
        $camiseta->descripcion = $request->get('descripcion');
        $camiseta->precio = $request->get('precio');
        $camiseta->talles = $request->get('talles');
        if ($request->hasFile('imagen')) {//si el usuario cargo una imagen
            $file = $request->file('imagen');//obtiene la imagen ingresada por el usuario
            $base64Image = base64_encode(file_get_contents($file->getRealPath()));//codifica la imagen en base64
            $camiseta->imagen = $base64Image;
        }
        $camiseta->id_equipo = $equipo->id_equipo;
        $camiseta->estado = $request->get('estado');
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
