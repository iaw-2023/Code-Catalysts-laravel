@extends('dashboard')

@section('title', 'Crear Liga')

@section('content')
    <h2>Crear liga</h2>
    <x-validacion></x-validacion>
    <form action="{{route('ligas.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
@endsection