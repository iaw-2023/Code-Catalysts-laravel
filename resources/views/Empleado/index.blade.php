@extends('dashboard')

@section('title', 'Empleados')

@section('content')
    <h2>Empleados</h2>
    @if (count($empleados) > 0)
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Email</th>
                    <th scope="col"> </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($empleados as $empleado)
                <tr>
                    <td>{{$empleado->nombre}}</td>
                    <td>{{$empleado->apellido}}</td>
                    <td>{{$empleado->email}}</td>
                    <td><a href="{{ route('empleados.destroy', $empleado->id) }}"
                            onclick="event.preventDefault();
                            if (confirm('¿Estás seguro de eliminar este empleado?')) {
                                document.getElementById('eliminar-empleado-{{ $empleado->id }}').submit();
                            }"
                            class="btn btn-outline-danger"
                        >Eliminar</a>
                        <form id="eliminar-empleado-{{ $empleado->id }}" action="{{ route('empleados.destroy', $empleado->id) }}" method="POST" style="display: none;">
                            @csrf
                            @method('delete')
                        </form> 
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="mensajeSinElementos">No se encontraron empleados.</p>
    @endif
@endsection