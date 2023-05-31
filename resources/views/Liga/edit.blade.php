@extends('dashboard')

@section('title', 'Editar Liga')

@section('content')
    <h2>Editar liga</h2>
    <x-validacion></x-validacion>
    <form action="{{route('ligas.update',$liga->id_liga)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required value="{{$liga->nombre}}">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection