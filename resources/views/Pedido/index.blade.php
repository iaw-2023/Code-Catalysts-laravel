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
                @foreach ($pedido->detalles as $detalle)
                    <tr>
                        <td>{{$pedido->id_pedido}}</td>
                        <td>{{$pedido->cliente->email}}</td>
                        <td>{{$detalle->camiseta->descripcion}}</td>
                        <td>{{$detalle->talle}}</td>
                        <td>{{$pedido->fecha}}</td>
                    </tr>
                @endforeach
            @endforeach
        </tbody>
    </table>
    @else
        <p class="mensajeSinElementos">No se encontraron pedidos.</p>
    @endif
@endsection