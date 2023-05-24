@extends('dashboard')

@section('title', 'Ligas')

@section('content')
        <h2>Ligas</h2>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col"> </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ligas as $liga)
                <tr>
                    <td>{{$liga->nombre}}</td>
                    <td> <a href="ligas/{{$liga->id_liga}}/edit" class="btn btn-outline-primary"> Editar </a> </td>
                </tr>
                @endforeach
            </tbody>
        </table>
@endsection