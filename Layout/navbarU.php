<?php

session_start();


?>


<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#menuLateral">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="/SoloArte/index.php">SoloArte</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/soloarte/Paginas/Usuario/Productos.php">Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/soloarte/Paginas/Creadores/MostrarCreadores.php">Cradores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/soloarte/Paginas/Promociones/MostrarPromociones.php">Promociones</a>
        </li>

        <li class="nav-item">
          <?php if (!$_SESSION) : ?>
            <a class="nav-link" href="../login.php">Inicia Sesion</a>
          <?php endif ?>
          <?php
          if ($_SESSION) : ?>
            <a class="nav-link" href="../../Transacciones/cerrarSesion.php">Cerrar Sesión</a>
          <?php endif ?>
        </li>

      </ul>
    </div>
  </div>
</nav>


<!-- MENU START  -->
<nav class="">
  <!-- NAV CONTAINER START -->
  <div class="container-fluid">

    <!-- NAV BUTTON  -->
    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#menuLateral">
      <span class="navbar-toggler-icon"></span>
    </button> -->
    <!-- OFFCANVAS MAIN CONTAINER START -->
    <section class="offcanvas offcanvas-start bg-dark" id="menuLateral" tabindex="-1">
      <div class="offcanvas-header" data-bs-theme="dark">
        <?php if (!$_SESSION) : ?>
          <h5 class="offcanvas-title text text-white"> <a href="../login.php" class="link link-light">Inicia Sesión</a> </h5>
        <?php endif ?>

        <?php if (isset($_SESSION)) : ?>
          <h5 class="offcanvas-title text text-white"> <?php if (isset($_SESSION['nombre'])) {
                                                          echo "Hola:" . $_SESSION['nombre'];
                                                        } ?> </h5>
        <?php endif ?>
        <button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="offcanvas"></button>
      </div>
      <!-- OFF CANVAS MENU LINKS  START-->
      <div class="offcanvas-body d-flex flex-column justify-content-between px-0">
        <ul class="navbar-nav fs-5 justify-content-evenly">

          <?php if ($_SESSION['rol'] === '2') : ?>
            <li class="nav-item p-3 py-md-1">
              <a href="/soloarte/Paginas/Usuario/PerfilUsuario.php" class="nav-link text-white"><i class="fa-solid fa-user"></i> Mi Perfil</a>
            </li>
            <li class="nav-item p-3 py-md-1">
              <a href="MisPedidos.php" class="nav-link text-white"><i class="fa-solid fa-truck"></i> Mis Pedidos</a>
            </li>
            <li class="nav-item p-3 py-md-1">
              <a href="Solicitudes.php" class="nav-link text-white"><i class="fa-solid fa-inbox"></i> Mensajes</a>
            </li>
            <li class="nav-item p-3 py-md-1">
              <a href="../Chat/Ayuda.php" class="nav-link text-white"><i class="fa-solid fa-inbox"></i> Ayuda</a>
            </li>
          <?php endif ?>

          <?php if ($_SESSION['rol'] === '1') : ?>
            <li class="nav-item p-3 py-md-1">
              <a href="/soloarte/Paginas/Admin" class="nav-link text-white"><i class="fa-solid fa-warehouse"></i> Productos</a>
            </li>
            <li class="nav-item p-3 py-md-1">
              <a href="/soloarte/Paginas/Usuarios.php" class="nav-link text-white"><i class="fa-solid fa-user"></i> Usuarios</a>
            </li>
            <li class="nav-item p-3 py-md-1">
              <a href="/soloarte/Paginas/Admin/Envios.php" class="nav-link text-white"><i class="fa-solid fa-truck"></i> Envios</a>
            </li>
            <li class="nav-item p-3 py-md-1">
              <a href="/soloarte/Paginas/Admin/Solicitudes.php" class="nav-link text-white"><i class="fa-solid fa-inbox"></i> Solicitudes</a>
            </li>
          <?php endif ?>


        </ul>
        <!-- enlaces redes sociales -->

        <div class="d-lg-none align-self-center py-3">
          <a href=""><i class="bi bi-twitter px-2 text-info fs-2"></i></a>
          <a href=""><i class="bi bi-facebook px-2 text-info fs-2"></i></a>
          <a href=""><i class="bi bi-github px-2 text-info fs-2"></i></a>
          <a href=""><i class="bi bi-whatsapp px-2 text-info fs-2"></i></a>
        </div>
      </div>
    </section>
    <!-- OFFCANVAS MAIN CONTAINER END  -->
  </div>
</nav>