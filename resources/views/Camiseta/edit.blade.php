@extends('dashboard')

@section('title', 'Editar Camiseta')

@section('content')
    <h2>Editar camiseta</h2>
    <form action="{{route('camisetas.update',$camiseta->id_camiseta)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="">Descripción</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" required value="{{$camiseta->descripcion}}">
        </div>
        <div class="form-group">
            <label for="">Precio</label>
            <input type="number" class="form-control" id="precio" name="precio" min="1" required value="{{$camiseta->precio}}">
        </div>
        <div class="form-group">
            <label for="">Talles</label>
            <p>Los talles deben ingresarse separándolos con un espacio en blanco.</p>
            <input type="text" class="form-control" id="talles" name="talles" required value="{{$camiseta->talles}}">
        </div>
        <div class="form-group">
            <label for="">Imagen</label>
            <input type="text" class="form-control" id="imagen" name="imagen" required value="{{$camiseta->imagen}}">
        </div>
        <div class="form-group">
            <label for="">Equipo</label>
            <select name ="equipo" id="equipo">
                <option name ="equipo" id="equipo" selected> {{$equipoActual->nombre}} </option>
                @foreach ($equipos as $equipo)
                    <option name ="equipo" id="equipo"> {{$equipo->nombre}} </option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label for="">Estado</label>
            <p>Si el estado de una camiseta es "Habilitado" se mostrará en la página online de ventas. En cambio, si es "Deshabilitado" no será visible para los clientes.</p>
            <select name ="estado" id="estado" value="{{$camiseta->estado}}">
                <option name ="estado" id="estado" value="Habilitado">Habilitado</option>
                <option name ="estado" id="estado" value="Deshabilitado">Deshabilitado</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection