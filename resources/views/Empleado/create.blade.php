@extends('dashboard')

@section('title', 'Crear Empleado')

@section('content')
    <h2>Crear empleado</h2>
    <x-validacion></x-validacion>
    <form action="{{route('empleados.store')}}" method="POST" >
        @csrf
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" required>
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
@endsection