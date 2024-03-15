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
                    @if(Auth::user()->rol === 'empleado')
                        <th scope="col"> </th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($camisetas as $camiseta)
                <tr>
                    <td>{{$camiseta->descripcion}}</td>
                    <td>{{$camiseta->precio}}</td>
                    <td>{{$camiseta->talles}}</td>
                    <td><img src="data:image/jpg;base64,{{$camiseta->imagen}}"  width="100px"></td>
                    <td>{{$camiseta->estado}}</td>
                    @if(Auth::user()->rol === 'empleado')
                        <td> <a href="camisetas/{{$camiseta->id_camiseta}}/edit" class="btn btn-outline-primary"> Editar </a> </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="mensajeSinElementos">No se encontraron camisetas.</p>
    @endif
@endsection