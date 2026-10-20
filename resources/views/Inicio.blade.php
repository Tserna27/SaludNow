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
 
   
 
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>

    <main class="flex-grow-1">
    </main>

    <footer class="bg-dark text-white pt-5 pb-3 mt-auto">
        <div class="container">
        <div class="row gy-4">
            
            <!-- Columna 1: Información / Marca -->
            <div class="col-12 col-md-4 text-center text-md-start">
            <h5 class="fw-bold mb-3">Logo</h5>
            <p class="text-secondary small">
                Ofrecemos las mejores soluciones y servicios para tu negocio. Conéctate con nosotros en nuestras redes.
            </p>
            </div>

            <!-- Columna 2: Enlaces Rápidos -->
            <div class="col-6 col-md-4 text-center">
            <h5 class="fw-bold mb-3">Enlaces</h5>
            <ul class="list-unstyled">
                <li class="mb-2"><a href="#" class="text-secondary text-decoration-none hover-white">Inicio</a></li>
                <li class="mb-2"><a href="#" class="text-secondary text-decoration-none hover-white">Servicios</a></li>
                <li class="mb-2"><a href="#" class="text-secondary text-decoration-none hover-white">Nosotros</a></li>
                <li class="mb-2"><a href="#" class="text-secondary text-decoration-none hover-white">Contacto</a></li>
            </ul>
            </div>

            <!-- Columna 3: Redes Sociales / Contacto -->
            <div class="col-6 col-md-4 text-center text-md-end">
            <h5 class="fw-bold mb-3">Síguenos</h5>
            <div class="d-flex justify-content-center justify-content-md-end gap-3 fs-4 mb-3">
                <a href="#" class="text-secondary"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-secondary"><i class="bi bi-instagram"></i></a>
                <a href="#" class="text-secondary"><i class="bi bi-twitter-x"></i></a>
                <a href="#" class="text-secondary"><i class="bi bi-linkedin"></i></a>
            </div>
            <p class="text-secondary small mb-0">info@misitio.com</p>
            </div>

        </div>

        <hr class="border-secondary my-4">

        <!-- Línea inferior de Copyright -->
        <div class="row">
            <div class="col text-center">
            <p class="text-secondary small mb-0">&copy; 2026 Mi Sitio Web. Todos los derechos reservados.</p>
            </div>
        </div>
        </div>
    </footer>
 
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    @stack('scripts')
</body>
</html>