<html>
    <head>
        <title>Camisetas {{$mensaje}}</title>
        <link rel="shortcut icon" href="https://i.ibb.co/7WBsHrf/Logo.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/puntos.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/inicio.css') }}" />
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body class="bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <x-nav></x-nav>
        <h2>Camisetas {{$mensaje}}</h2>
        @if (count($camisetas) > 0)
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">Descripción</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Talles</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Estado</th>
                        <th scope="col"> </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($camisetas as $camiseta)
                    <tr>
                        <td>{{$camiseta->descripcion}}</td>
                        <td>{{$camiseta->precio}}</td>
                        <td>{{$camiseta->talles}}</td>
                        <td><img src={{$camiseta->imagen}} width="100px"></td>
                        <td>{{$camiseta->estado}}</td>
                        <td> <a href="camisetas/{{$camiseta->id_camiseta}}/edit" class="btn btn-outline-primary"> Editar </a> </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p class="mensajeSinElementos">No se encontraron camisetas.</p>
        @endif
    </body>
</html>