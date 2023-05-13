<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\modeloLiga;

class LigaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ligas = DB::table('liga')
                    ->orderBy('id_liga', 'asc')
                    ->get();
        return view('Liga.index')->with('ligas',$ligas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Liga.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $liga = new modeloLiga();
        $liga->nombre = $request->get('nombre');
        $liga->created_at = now();
        $liga->updated_at = now();
        $liga->save();
        return redirect('/ligas');
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
        $liga = modeloLiga::find($id);
        return view('Liga.edit')->with('liga',$liga);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $liga = modeloLiga::find($id);
        $liga->nombre = $request->get('nombre');
        $liga->updated_at = now();
        $liga->save();
        return redirect('/ligas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
