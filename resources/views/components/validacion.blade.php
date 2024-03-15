@if ($errors->any())
    <div class="alert alert-danger">
        <h3>Falla en la carga de datos</h3>
        <h5>Motivos:</h5>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <h5>Por favor vuelva a ingresarlos correctamente.</h5>
    </div>
@endif