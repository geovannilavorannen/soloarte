<!DOCTYPE html>

<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Plugins/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="Plugins/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="Plugins/bootstrap/css/all.min.css">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title>Bienvenido a SoloArte</title>

</head>

<body>
<nav class=" navbar navbar-expand-lg  sticky-top  navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#menuLateral">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="/soloarte">Solo Arte</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/soloarte/Paginas/Usuario/Productos.php">Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/soloarte/Paginas/Creadores/MostrarCreadores.php">Craedores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/soloarte/Paginas/Promociones/MostrarPromociones.php">Promociones</a>
        </li>
<?php session_start() ?>
        <?php if (isset($_SESSION['nombre'])) : ?>
          <li class="nav-item">
            <a class="nav-link" href="Transacciones/cerrarSesion.php">Cerrar Sesión</a>
          </li>
        <?php endif ?>
        
        <?php if (!$_SESSION) : ?>
          <li class="nav-item">
            <a class="nav-link" href="Paginas/login.php">Iniciar Sesión</a>
          </li>
          <li>
          <a class="nav-link" href="Paginas/crearUsuario.php">Registrate</a>
          </li>
        <?php endif ?>

      </ul>
    </div>
  </div>
</nav>


  <!-- Carrusel de imágenes -->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">

      <div class="carousel-item active">
        <img src="Images/CB1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="Images/CB2.jpg" class=" d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="Images/CB3.jpg" class=" d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Siguiente</span>
    </button>
  </div>


  <!-- Botón flotante oculto inicialmente -->
  <div id="botonFlotante" style="position: fixed; bottom: 20px; right: 20px; display: block;">
    <a href="/SoloArte/Paginas/Chat/Ayuda.php" class="btn btn bg bg-rosaMX">
      <img src="Images/Chat/chat.jpg" alt="chat" width="52" height="52">
    </a>
  </div>


  <!-- Contenido principal -->
  <div style="background-image: url('Images/Index/manosbarro.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">

    <div class="container mt-5" style="background-color: rgba(255, 255, 255, 0.5);">
      <h1>Bienvenido a SoloArte</h1>
      
      <p>¡Encuentra los mejores productos al mejor precio en nuestra tienda en línea! Explora nuestra amplia selección de categorías y descubre increíbles ofertas que no podrás resistir.</p>
      <a href="Paginas/Usuario/Productos.php" class="btn btn-primary">Explorar</a>
    </div>

  </div>


  <!-- Sección "Quiénes somos" -->
  <section id="quienes-somos" class="bg-light py-5" style="background-image: url('Images/Index/coktel.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    
    <div class="container" style="background-color: rgba(255, 255, 255, 0.5);">
      <h2>Quiénes somos</h2>
      <p>En Solo Arte, nos apasiona el arte mexicano y estamos comprometidos con su promoción y difusión. Nuestra misión es brindar una plataforma para que los artistas locales puedan exhibir y comercializar su trabajo, celebrando la riqueza cultural de México.</p>
      <p>Nos enorgullece presentar una amplia variedad de arte mexicano, desde pinturas y esculturas hasta artesanías tradicionales. Trabajamos en estrecha colaboración con artistas reconocidos y emergentes, proporcionándoles un espacio para que muestren su talento y compartan su visión única.</p>
      <p>Además de promover el arte, también nos preocupamos por preservar las técnicas y tradiciones artesanales de México. Valoramos el legado cultural que se transmite de generación en generación, y buscamos apoyar a los artesanos locales, quienes con su habilidad y dedicación crean piezas únicas y auténticas.</p>
      <p>En Solo Arte, creemos en el poder del arte para enriquecer nuestras vidas, expresar emociones y contar historias. Te invitamos a explorar nuestra tienda en línea y descubrir la belleza y diversidad del arte mexicano. Únete a nosotros en esta maravillosa travesía artística y sé parte de nuestra comunidad.</p>

    </div>
  </section>


  <!-- Sección "Términos y condiciones" -->
  <section id="terminos-condiciones" class="bg-light py-5">
    <div class="container">
      <h2>Términos y condiciones</h2>
      <p>Aquí puedes agregar los términos y condiciones que rigen el uso de tu sitio web y la compra de productos. Asegúrate de incluir información relevante sobre envío, devoluciones, políticas de privacidad, etc.</p>
    </div>
  </section>

  <!-- Sección "Trabaja con nosotros" -->
  <section id="trabaja-con-nosotros" class="py-0.5">
    <div class="container">
      <h2>Trabaja con nosotros</h2>
      <p>Si estás interesado en formar parte de nuestro equipo, puedes agregar aquí información sobre oportunidades laborales, requisitos y cómo enviar una solicitud. Anima a los visitantes a unirse a tu proyecto.</p>
    </div>
  </section>

  <!-- Enlaces a los archivos JavaScript de Bootstrap -->
  <script src="Plugins/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>

<!-- Enlaces a los archivos JavaScript de Bootstrap -->
<script src="Plugins/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>