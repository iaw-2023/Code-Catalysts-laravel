@extends('dashboard')

@section('title', 'Camisetas')

@section('content')
    <h2>Camisetas {{$mensaje}}</h2>
    @if (count($camisetas) > 0)
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Descripción</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Talles</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Estado</th>
                    <th scope="col"> </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($camisetas as $camiseta)
                <tr>
                    <td>{{$camiseta->descripcion}}</td>
                    <td>{{$camiseta->precio}}</td>
                    <td>{{$camiseta->talles}}</td>
                    <td><img src={{$camiseta->imagen}} width="100px"></td>
                    <td>{{$camiseta->estado}}</td>
                    <td> <a href="camisetas/{{$camiseta->id_camiseta}}/edit" class="btn btn-outline-primary"> Editar </a> </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="mensajeSinElementos">No se encontraron camisetas.</p>
    @endif
@endsection