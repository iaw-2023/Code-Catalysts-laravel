<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <img class="logoNav" src="https://i.ibb.co/7WBsHrf/Logo.png" width="50px">
    <a class="navbar-brand" href="">La Camiseta No Se Mancha </a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Camisetas
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ url('/') }}/camisetas/create"> Crear camiseta </a>
                <a class="dropdown-item" href="{{ url('/') }}/camisetas"> Mostrar Camisetas </a> 
            </div>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Ligas
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ url('/') }}/ligas/create"> Crear liga </a>
                <a class="dropdown-item" href="{{ url('/') }}/ligas"> Mostrar Ligas </a> 
            </div>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Equipos
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ url('/') }}/equipos/create"> Crear equipo </a>
                <a class="dropdown-item" href="{{ url('/') }}/equipos"> Mostrar Equipos </a>
            </div> 
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Clientes
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ url('/') }}/clientes"> Mostrar Clientes </a> 
            </div>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Pedidos
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ url('/') }}/pedidos"> Mostrar Pedidos </a> 
            </div>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Reportes
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ url('/') }}/reporte/pedidos-por-tiempo"> Pedidos por tiempo </a> 
                <a class="dropdown-item" href="{{ url('/') }}/reporte/pedidos-por-cliente"> Pedidos por cliente </a> 
                <a class="dropdown-item" href="{{ url('/') }}/reporte/pedidos-por-camiseta"> Pedidos por camiseta </a> 
                <a class="dropdown-item" href="{{ url('/') }}/reporte/pedidos-por-equipo"> Pedidos por equipo </a> 
                <a class="dropdown-item" href="{{ url('/') }}/reporte/pedidos-por-liga"> Pedidos por liga </a> 
                <a class="dropdown-item" href="{{ url('/') }}/reporte/camisetas-por-equipo"> Camisetas por equipo </a> 
                <a class="dropdown-item" href="{{ url('/') }}/reporte/camisetas-por-liga"> Camisetas por liga </a> 
            </div>
        </li>
        
        <li class="nav-item">
            <form class="formularioNav" method="POST" action="{{ route('logout') }}">
                @csrf
                <a class="nav-link":href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                        Cerrar Sesion
                </a>
            </form>
        </li>

    </div>
</nav>