@extends('dashboard')

@section('title', 'Crear Camisetas')

@section('content')
    <h2>Crear camiseta</h2>
    <form action="{{route('camisetas.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Descripción</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" required>
        </div>
        <div class="form-group">
            <label for="">Precio</label>
            <input type="number" class="form-control" id="precio" name="precio" min="1" required>
        </div>
        <div class="form-group">
            <label for="">Talles</label>
            <p>Los talles deben ingresarse separándolos con un espacio en blanco.</p>
            <input type="text" class="form-control" id="talles" name="talles" required>
        </div>
        <div class="form-group">
            <label for="">Imagen</label>
            <input type="text" class="form-control" id="imagen" name="imagen" required>
        </div>
        <div class="form-group">
            <label for="">Equipo</label>
            <select name ="equipo" id="equipo">
                @foreach ($equipos as $equipo)
                    <option name ="equipo" id="equipo"> {{$equipo->nombre}} </option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label for="">Estado</label>
            <p>Si el estado de una camiseta es "Habilitado" se mostrará en la página online de ventas. En cambio, si es "Deshabilitado" no será visible para los clientes.</p>
            <select name ="estado" id="estado">
                <option name ="estado" id="estado" value="Habilitado">Habilitado</option>
                <option name ="estado" id="estado" value="Deshabilitado">Deshabilitado</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
@endsection