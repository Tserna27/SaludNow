<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio</title>
  <!-- Bootstrap 5 CSS -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/Inicio.css') }}" rel="stylesheet">
  <link href="{{ asset('favicon/android-icon-192x192.png') }}" rel="icon" type="image/x-icon">
</head>
<body class="d-flex flex-column h-100">

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <!-- CAMBIO: Se usa container en vez de container-fluid para que no se pegue a los bordes -->
    <div class="container">
      
      <!-- LOGO (A la izquierda) -->
      <a class="navbar-brand" href="#">
        <img src="{{ asset('imagenes/logo2.png') }}" alt="Logo" width="130" class="d-inline-block align-text-top">
      </a>
      
      <!-- Botón Hamburguesa (Solo para móvil) -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
        <!-- ELEMENTOS EN EL MEDIO -->
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-center">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Quienes Somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contacto</a>
          </li>
        </ul>

        <!-- INICIAR SESIÓN A LA DERECHA -->
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">
          <li class="nav-item">
            <a class="nav-link fw-semibold" href="#">Iniciar Sesión</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>

  <!-- CONTENIDO VACÍO QUE EMPUJA EL FOOTER HASTA ABAJO -->
  <main class="flex-shrink-0 flex-grow-1">
  </main>

  <!-- FOOTER -->
  <footer class="footer mt-auto py-3">
    <!-- CAMBIO: container aplicado también aquí para mantener la misma línea centrada -->
    <div class="container">
      <div class="row gy-2 align-items-center">
        <div class="col-12 col-md-6 text-center text-md-start">
          <p class="mb-0 text-secondary">&copy; 2026 Mi Sitio Web. Todos los derechos reservados.</p>
        </div>
        <div class="col-12 col-md-6 text-center text-md-end">
          <a href="#" class="text-secondary text-decoration-none me-3">Privacidad</a>
          <a href="#" class="text-secondary text-decoration-none me-3">Terminos y Condiciones</a>
          <a href="#" class="text-secondary text-decoration-none me-3">Blog</a>
          <a href="#" class="text-secondary text-decoration-none">Ayuda</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap 5 JS Bundle -->
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>