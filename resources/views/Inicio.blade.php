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
    <!-- NAVBAR (Igual al de la imagen) -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        
        <!-- Botón Hamburguesa (solo visible en pantallas pequeñas) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Enlaces alineados a la izquierda -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
                </a>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li>
            </ul>

            <!-- Buscador con botón verde alineado a la derecha -->
            <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
        </div>
    </nav>

    <main class="flex-grow-1">
    </main>

    <!-- FOOTER RESPONSIVO (Siempre al fondo) -->
    <footer class="bg-dark text-white py-4 mt-auto">
        <div class="container">
        <div class="row gy-3 align-items-center">
            <div class="col-12 col-md-6 text-center text-md-start">
            <p class="mb-0">&copy; 2026 Mi Sitio Web. Todos los derechos reservados.</p>
            </div>
            <div class="col-12 col-md-6 text-center text-md-end">
            <a href="#" class="text-white text-decoration-none me-3">Privacidad</a>
            <a href="#" class="text-white text-decoration-none me-3">Términos</a>
            <a href="#" class="text-white text-decoration-none">Contacto</a>
            </div>
        </div>
        </div>
    </footer>
 
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    @stack('scripts')
</body>
</html>