@extends('dashboard')

@section('title', 'Camisetas por liga')

@section('content')
    <h2>Camisetas por liga</h2>
    <x-validacion></x-validacion>
    <form action="{{route('camisetaPorLiga.index')}}" method="GET">
        @csrf
        <div class="form-group">
            <label for="">Seleccione una liga</label>
            <select name ="liga" id="liga">
                @foreach ($ligas as $liga)
                    <option name ="liga" id="liga"> {{$liga->nombre}} </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Consultar</button>
    </form>
@endsection