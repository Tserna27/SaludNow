<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio</title>
  <!-- Bootstrap 5 CSS -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/Inicio.css') }}" rel="stylesheet">
  <link href="{{asset('favicon/android-icon-192x192.png')}}" rel="icon" type="image/x-icon">
</head>
<body class="d-flex flex-column h-100">

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      
      <!-- LOGO (A la izquierda) -->
      <a class="navbar-brand" href="#">
        <img src="{{asset('imagenes/logo2.png')}}" alt="Logo" width="130"class="d-inline-block align-text-top">
      </a>
      
      <!-- Botón Hamburguesa (Solo para móvil) -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
        <!-- ELEMENTOS EN EL MEDIO (mx-auto centra los enlaces) -->
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-center">
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

        <!-- BÚSQUEDA (A la derecha) -->
        <form class="d-flex mt-2 mt-lg-0" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

      </div>
    </div>
  </nav>

  <!-- CONTENIDO VACÍO QUE EMPUJA EL FOOTER HASTA ABAJO -->
  <main class="flex-shrink-0 flex-grow-1">
  </main>

  <!-- FOOTER (Pegado 100% abajo en el borde de la pantalla) -->
  <footer class="footer mt-auto py-3 bg-dark text-white">
    <div class="container">
      <div class="row gy-2 align-items-center">
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

  <!-- Bootstrap 5 JS Bundle (Para menú hamburguesa y desplegable) -->
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>