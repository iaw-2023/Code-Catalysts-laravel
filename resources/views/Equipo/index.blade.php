@extends('dashboard')

@section('title', 'Equipos')

@section('content')
    <h2>Equipos</h2>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Liga</th>
                @if(Auth::user()->rol === 'empleado')
                    <th scope="col"> </th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach ($equipos as $equipo)
            <tr>
                <td>{{$equipo->nombre}}</td>
                <td>{{$equipo->liga->nombre}}</td>
                @if(Auth::user()->rol === 'empleado')
                    <td> <a href="equipos/{{$equipo->id_equipo}}/edit" class="boton btn btn-outline-primary"> Editar </a> </td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection