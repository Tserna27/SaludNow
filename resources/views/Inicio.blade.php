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
  <nav class="navbar navbar-expand-lg bg-body-tertiary mb-4">
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

  <!-- MAIN CONTENT -->
  <main class="flex-shrink-0 flex-grow-1 d-flex align-items-center">
    <div class="container py-5">
      
      <!-- Fila principal que alinea el texto a la izquierda y la imagen a la derecha -->
        <div class="row align-items-center gy-5">
        
        <!-- COLUMNA IZQUIERDA: Textos y botones -->
        <div class="col-12 col-lg-6 text-start">

            <h1 class="fw-bold text-dark display-4 mb-3">Tu salud, sin filas ni esperas.</h1>
            <p class="lead text-secondary mb-2">Agenda tu cita médica de forma fácil, segura y desde cualquier dispositivo.</p>
            <p class="text-secondary mb-4">Explora nuestros servicios y descubre cómo podemos ayudarte.</p>
            
            <div class="d-flex flex-wrap gap-3">
                <a href="#" class="btn rounded-pill px-4 py-2 border boton1">Agendar una cita</a>
                <a href="#" class="btn rounded-pill px-4 py-2 border boton2">Conocer servicios</a>
          </div>
        </div>

        <!-- COLUMNA DERECHA: Imagen con dos tarjetas flotantes de preguntas -->
        <div class="col-12 col-lg-6">
            <div class="hero-image-wrapper position-relative">
                
                <!-- Imagen principal -->
                <img src="{{ asset('imagenes/Chica-medica.jpg') }}" alt="Chica médica" class="img-fluid rounded-4 shadow-sm w-100 object-fit-cover hero-img">

                <!-- TARJETA FLOTANTE 1 (Pregunta abajo a la izquierda) -->
                <div class="floating-card card-bottom-left bg-white p-3 rounded-4 shadow d-flex align-items-center gap-3">
                <div class="bg-light text-success p-2 rounded-3 fs-4">❓</div>
                <div>
                    <span class="text-muted small d-block">¿Necesitas ayuda?</span>
                    <strong class="text-dark">¿Cómo agendar mi cita?</strong>
                </div>
                </div>

                <!-- TARJETA FLOTANTE 2 (Pregunta arriba a la derecha) -->
                <div class="floating-card card-top-right bg-white p-3 rounded-4 shadow d-flex align-items-center gap-3">
                <div class="bg-light text-primary p-2 rounded-3 fs-4">💬</div>
                <div>
                    <strong class="text-dark d-block">¿Tienes dudas?</strong>
                    <span class="text-muted small">Consultar especialistas</span>
                </div>
                </div>

            </div>
        </div>

      </div>

    </div>
  </main>

  <!-- FOOTER -->
  <footer class="footer mt-auto py-3">
    <!-- CAMBIO: container aplicado también aquí para mantener la misma línea centrada -->
    <div class="container">
      <div class="row gy-2 align-items-center">
        <div class="col-12 col-md-6 text-center text-md-start">
          <p class="mb-0">&copy; 2026 Mi Sitio Web. Todos los derechos reservados.</p>
        </div>
        <div class="col-12 col-md-6 text-center text-md-end enlaces-footer">
          <a href="#" class="me-3">Privacidad</a>
          <a href="#" class="me-3">Terminos y Condiciones</a>
          <a href="#" class="me-3">Blog</a>
          <a href="#" class="me-3">Ayuda</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap 5 JS Bundle -->
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>