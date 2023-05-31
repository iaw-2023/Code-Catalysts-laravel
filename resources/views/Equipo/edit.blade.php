@extends('dashboard')

@section('title', 'Editar Equipo')

@section('content')
    <h2>Editar equipo</h2>
    <x-validacion></x-validacion>
    <form action="{{route('equipos.update',$equipo->id_equipo)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required value="{{$equipo->nombre}}">
        </div>
        <div class="form-group">
            <label for="">Liga</label>
            <select name ="liga" id="liga">
                <option name ="liga" id="liga" selected> {{$equipo->liga->nombre}} </option>
                @foreach ($ligas as $liga)
                    <option name ="liga" id="liga"> {{$liga->nombre}} </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection