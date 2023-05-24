@extends('dashboard')

@section('title', 'Pedidos por cliente')

@section('content')
    <h2>Historial de pedidos por cliente</h2>
    <form action="{{route('pedidoPorCliente.index')}}" method="GET">
        @csrf
        <div class="form-group">
            <label for="">Seleccione un cliente</label>
            <select name ="cliente" id="cliente">
                @foreach ($clientes as $cliente)
                    <option name ="cliente" id="cliente"> {{$cliente->email}} </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Consultar</button>
    </form>
@endsection