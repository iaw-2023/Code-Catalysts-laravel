@extends('dashboard')

@section('title', 'Editar Datos Personales')

@section('content')
    <h2>Editar Datos Personales</h2>
    <x-validacion></x-validacion>
    <form action="{{route('datos-personales.update',Auth::user()->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required value="{{Auth::user()->nombre}}">
        </div>
        <div class="form-group">
            <label for="">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" required value="{{Auth::user()->apellido}}">
        </div>
        <div class="form-group">
            <label for="">Email actual: {{Auth::user()->email}}</label>
            <p>Si desea modificar su email actual, ingrese uno nuevo. En cambio, si desea mantenerlo, deje este campo vacío.</p>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="">Contraseña</label>
            <p>Si desea modificar su contraseña actual, ingrese una nueva. En cambio, si desea mantenerla, deje este campo vacío.</p>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection