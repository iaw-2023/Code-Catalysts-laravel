@extends('dashboard')

@section('title', 'Equipos')

@section('content')
    <h2>Equipos</h2>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Liga</th>
                <th scope="col"> </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($equipos as $equipo)
            <tr>
                <td>{{$equipo->nombre}}</td>
                <td>{{$equipo->liga}}</td>
                <td> <a href="equipos/{{$equipo->id_equipo}}/edit" class="boton btn btn-outline-primary"> Editar </a> </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection