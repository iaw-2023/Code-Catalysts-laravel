@extends('dashboard')

@section('title', 'Clientes')

@section('content')
    <h2>Clientes</h2>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">Correo Electronico</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
            <tr>
                <td>{{$cliente->email}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection