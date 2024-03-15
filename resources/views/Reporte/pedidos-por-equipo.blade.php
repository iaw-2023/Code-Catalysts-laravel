@extends('dashboard')

@section('title', 'Pedidos por equipo')

@section('content')
    <h2>Historial de pedidos por equipo</h2>
    <x-validacion></x-validacion>
    <form action="{{route('pedidoPorEquipo.index')}}" method="GET">
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