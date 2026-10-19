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
<body>

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
                    <li class="nav-item"><a class="nav-link enlace-menu activo" href="{{ url('/') }}">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link enlace-menu" href="{{ url('/citas/agendar') }}">Agendar cita</a></li>
                    <li class="nav-item"><a class="nav-link enlace-menu" href="{{ url('/servicios') }}">Servicios</a></li>
                    <li class="nav-item"><a class="nav-link enlace-menu" href="{{ url('/ayuda') }}">Ayuda</a></li>
                </ul>
                <a href="{{ url('/citas') }}" class="btn boton-contorno">Mis citas</a>
            </div>
        </div>
    </nav>

    {{-- PORTADA --}}
    <header class="portada">
        <div class="container">
            <div class="row align-items-center g-5">

                <div class="col-lg-6">
                    <span class="etiqueta-centro">
                        <span class="punto-verde"></span> Centro de Salud San Vicente
                    </span>

                    <h1 class="titulo-portada">Tu salud, sin filas ni esperas.</h1>

                    <p class="texto-portada">
                        Agenda tu cita médica de forma fácil, segura y desde cualquier dispositivo.
                        Estamos más cerca de ti.
                    </p>

                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <a href="{{ url('/citas/agendar') }}" class="btn boton-principal">Agendar una cita</a>
                        <a href="{{ url('/servicios') }}" class="btn boton-secundario">Conocer servicios</a>
                    </div>

                    <div class="pacientes">
                        <div class="grupo-avatares">
                            <span class="avatar avatar-1">LM</span>
                            <span class="avatar avatar-2">AR</span>
                            <span class="avatar avatar-3">JS</span>
                        </div>
                        <span class="texto-pacientes">Más de 500 pacientes atendidos</span>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="contenedor-foto">
                        <img src="{{ asset('img/portada.jpg') }}" alt="Personal de salud sonriendo" class="foto-portada">

                        <div class="tarjeta-disponibilidad">
                            <span class="icono-calendario" aria-hidden="true">
                                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="3" y="4" width="18" height="18" rx="2"></rect>
                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                </svg>
                            </span>
                            <div>
                                <small class="d-block texto-suave">Próxima disponibilidad</small>
                                <strong>{{ $proximaDisponibilidad ?? 'Hoy, 2:00 p. m.' }}</strong>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </header>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>