@extends('dashboard')

@section('title', 'Pedidos por tiempo')

@section('content')
    <h2>Historial de pedidos por periodo de tiempo</h2>
    <x-validacion></x-validacion>
    <form action="{{route('pedidoPorTiempo.index')}}" method="GET">
        @csrf
        <div class="form-group">
            <label for="">Fecha de inicio</label>
            <input type="date" class="form-control" id="inicio" name="inicio" required>
        </div>
        <div class="form-group">
            <label for="">Fecha de fin</label>
            <input type="date" class="form-control" id="fin" name="fin" required>
        </div>
        <button type="submit" class="btn btn-primary">Consultar</button>
    </form>
@endsection