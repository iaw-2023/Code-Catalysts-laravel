@extends('dashboard')

@section('title', 'Pedidos')

@section('content')
    <h2>Pedidos {{$mensaje}}</h2>
    @if (count($pedidos) > 0)
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">Pedido</th>
                <th scope="col">Cliente</th>
                <th scope="col">Camiseta</th>
                <th scope="col">Talle</th>
                <th scope="col">Fecha</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pedidos as $pedido)
            <tr>
                <td>{{$pedido->id_pedido}}</td>
                <td>{{$pedido->email}}</td>
                <td>{{$pedido->descripcion}}</td>
                <td>{{$pedido->talle}}</td>
                <td>{{$pedido->fecha}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
        <p class="mensajeSinElementos">No se encontraron pedidos.</p>
    @endif
@endsection