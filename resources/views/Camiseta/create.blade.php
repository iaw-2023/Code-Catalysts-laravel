<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        <x-nav></x-nav>
        <form action="{{route('camisetas.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Descripción</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion">
            </div>
            <div class="form-group">
                <label for="">Precio</label>
                <input type="number" class="form-control" id="precio" name="precio">
            </div>
            <div class="form-group">
                <label for="">Talles</label>
                <input type="text" class="form-control" id="talles" name="talles">
            </div>
            <div class="form-group">
                <label for="">Imagen</label>
                <input type="text" class="form-control" id="imagen" name="imagen">
            </div>
            <div class="form-group">
                <label for="">Equipo</label>
                <select name ="equipo" id="equipo">
                    @foreach ($equipos as $equipo)
                        <option name ="equipo" id="equipo"> {{$equipo->nombre}} </option>
                    @endforeach
                </select>
            </div>
            
            <div class="form-group">
                <label for="">Estado</label>
                <select name ="estado" id="estado">
                    <option name ="estado" id="estado" value="Habilitado">Habilitado</option>
                    <option name ="estado" id="estado" value="Deshabilitado">Deshabilitado</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
    </body>
</html>