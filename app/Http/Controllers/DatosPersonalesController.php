<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatosPersonalesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('DatosPersonales.index');
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
        $validated = $request->validate([
            'nombre' => ['required'],
            'apellido' => ['required'],
            'email' => ['nullable', 'email', 'unique:users,email', 'required_if:email_field_present,true']
        ]);
        $usuario = User::find($id);
        $usuario->nombre = $request->get('nombre');
        $usuario->apellido = $request->get('apellido');
        if ($request->filled('email')) {
            $usuario->email = $request->get('email');
        }
        if ($request->filled('password')) {
            $usuario->password = Hash::make($request->get('password'));
        }
        $usuario->updated_at = now();
        $usuario->save();
        return redirect('/datos-personales');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
