@extends('dashboard')

@section('title', 'Ligas')

@section('content')
        <h2>Ligas</h2>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    @if(Auth::user()->rol === 'empleado')
                        <th scope="col"> </th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($ligas as $liga)
                <tr>
                    <td>{{$liga->nombre}}</td>
                    @if(Auth::user()->rol === 'empleado')
                        <td> <a href="ligas/{{$liga->id_liga}}/edit" class="btn btn-outline-primary"> Editar </a> </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
@endsection