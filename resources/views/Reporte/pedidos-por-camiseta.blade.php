@extends('dashboard')

@section('title', 'Pedidos por camiseta')

@section('content')
    <h2>Historial de pedidos por camiseta</h2>
    <form action="{{route('pedidoPorCamiseta.index')}}" method="GET">
        @csrf
        <div class="form-group">
            <label for="">Seleccione una camiseta</label>
            <select name ="camiseta" id="camiseta">
                @foreach ($camisetas as $camiseta)
                    <option name ="camiseta" id="camiseta"> {{$camiseta->descripcion}} </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Consultar</button>
    </form>
@endsection