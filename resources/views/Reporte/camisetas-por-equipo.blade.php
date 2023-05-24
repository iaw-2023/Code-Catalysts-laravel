@extends('dashboard')

@section('title', 'Camisetas por equipo')

@section('content')
    <h2>Camisetas por equipo</h2>
    <form action="{{route('camisetaPorEquipo.index')}}" method="GET">
            @csrf
            <div class="form-group">
                <label for="">Seleccione un equipo</label>
                <select name ="equipo" id="equipo">
                    @foreach ($equipos as $equipo)
                        <option name ="equipo" id="equipo"> {{$equipo->nombre}} </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Consultar</button>
        </form>
@endsection