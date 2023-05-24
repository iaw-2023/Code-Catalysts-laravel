@extends('dashboard')

@section('title', 'Crear equipo')

@section('content')
    <h2>Crear equipo</h2>
    <form action="{{route('equipos.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="">Liga</label>
            <select name ="liga" id="liga">
                @foreach ($ligas as $liga)
                    <option name ="liga" id="liga"> {{$liga->nombre}} </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
@endsection