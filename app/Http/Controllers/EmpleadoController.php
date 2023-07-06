<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empleados = User::where('rol', 'empleado')->get();
        return view('Empleado.index')->with('empleados',$empleados);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => ['required'],
            'apellido' => ['required'],
            'email' => ['required','email','unique:users,email'],
            'password' => ['required']
        ]);
        
        $empleado = new User();
        $empleado->nombre = $request->get('nombre');
        $empleado->apellido = $request->get('apellido');
        $empleado->email = $request->get('email');
        $empleado->password = $request->get('password');
        $empleado->rol = "empleado";
        $empleado->created_at = now();
        $empleado->updated_at = now();
        $empleado->save();
        return redirect('/empleados');
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
        $empleado = User::find($id);
        $empleado->delete();
        return redirect()->back();
    }
}
