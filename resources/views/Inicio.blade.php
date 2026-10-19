<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SaludNow | Tu salud, sin filas ni esperas</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/Inicio.css') }}" rel="stylesheet">
</head>
<body class="cuerpo-pagina">
 
    {{-- BARRA DE NAVEGACIÓN --}}
    <nav class="navbar navbar-expand-lg barra-navegacion">
        <div class="container">
            <a class="navbar-brand marca" href="{{ url('/') }}">
                <span class="marca-icono">+</span>
                <span class="marca-texto">Salud<span class="marca-acento">Now</span></span>
            </a>
 
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#menuPrincipal" aria-controls="menuPrincipal"
                    aria-expanded="false" aria-label="Abrir menú">
                <span class="navbar-toggler-icon"></span>
            </button>
 
            <div class="collapse navbar-collapse" id="menuPrincipal">
                <ul class="navbar-nav mx-auto gap-lg-3">
                    <li class="nav-item">
                        <a class="nav-link enlace-menu {{ request()->is('/') ? 'activo' : '' }}" href="{{ url('/') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link enlace-menu {{ request()->is('citas/agendar*') ? 'activo' : '' }}" href="{{ url('/citas/agendar') }}">Agendar cita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link enlace-menu {{ request()->is('servicios*') ? 'activo' : '' }}" href="{{ url('/servicios') }}">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link enlace-menu {{ request()->is('ayuda*') ? 'activo' : '' }}" href="{{ url('/ayuda') }}">Ayuda</a>
                    </li>
                </ul>
 
                <div class="d-flex align-items-center gap-2">
                    @guest
                        <a href="{{ url('/iniciar-sesion') }}" class="btn boton-contorno">Iniciar sesión</a>
                        <a href="{{ url('/registro') }}" class="btn boton-principal boton-pequeno">Registrarse</a>
                    @endguest
 
                    @auth
                        <a href="{{ url('/citas') }}" class="btn boton-contorno">Mis citas</a>
                        <form method="POST" action="{{ url('/cerrar-sesion') }}">
                            @csrf
                            <button type="submit" class="btn boton-texto">Cerrar sesión</button>
                        </form>
                    @endauth
                </div>
            </div>
        </div>
    </nav>
 
    {{-- CONTENIDO DE CADA PÁGINA --}}
    <main class="contenido-principal">
        @yield('contenido')
    </main>
 
    {{-- FOOTER --}}
    <footer class="pie-pagina">
        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center gap-2">
            <span>© {{ date('Y') }} SaludNow. Todos los derechos reservados.</span>
            <nav class="d-flex gap-3" aria-label="Enlaces del pie de página">
                <a href="{{ url('/servicios') }}">Servicios</a>
                <a href="{{ url('/ayuda') }}">Ayuda</a>
                <a href="{{ url('/contacto') }}">Contacto</a>
            </nav>
        </div>
    </footer>
 
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    @stack('scripts')
</body>
</html>