<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../../Layout/estilos.php'  ?>
    <title>Mi Perfil</title>
</head>

<body>
    <?php include '../../Layout/navbarU.php' ?>

    <?php

    $resultado = $_GET['resul'] ?? null;

    if ($resultado === "1") : ?>
        <script>
            Swal.fire(
                'Numero Agregado Correctamente',
                '',
                'success'
            );
        </script>

    <?php elseif ($resultado === "2") : ?>
        <script>
            Swal.fire(
                'Imagen Actualizada Correctamente',
                '',
                'success'
            );
        </script>
    <?php elseif ($resultado === "3") : ?>
        <script>
            Swal.fire(
                'Algo salio mal',
                '',
                'error'
            );
        </script>
    <?php endif ?>




    <?php
    include '../../Conection/cn.php';
    $idusuario = $_SESSION['usuario'];
    $query = "SELECT * FROM usuarios WHERE id_usuario = $idusuario ";
    $usuarios = $db->query($query);
    $datos = $usuarios->fetch_assoc();

    ?>

    <div class="container mt-5">
        <div class="row justify-content-between">
            <div class="col-lg-2 col-sm-12 d-flex justify-content-center">
                <div class="">
                    <div>
                        <div>
                            <?php if ($datos['imgPerfil']) : ?>
                                <img style=" height: 180px; width:180px object-fit: scale-down;  border-radius: 10px;" src="../../Transacciones/obtenerimgU.php?id=<?php echo $idusuario ?>" alt="Imagen Perfil" class="img-fluid img-thumbnail" style="z-index: 1;">
                            <?php endif ?>

                            <?php if (!$datos['imgPerfil']) : ?>
                                <img style="  height: 180px; width: 180px; object-fit: scale-down;  border-radius: 10px;" src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-1.webp" alt="Imagen Perfil" class="img-fluid img-thumbnail" style=" z-index: 1;">
                            <?php endif ?>

                        </div>
                        <div class="">
                            <a href="#" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#imgUsuarioModal" data-bs-id="<?php echo $idusuario ?>"><i class="fa-solid fa-pencil"></i></a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-8 col-sm-12 mb-5">
                <h1 class="text text-center">Mi Perfil</h1>

                <div class="row justify-content-between mt-lg-5">
                    <div class=" col-lg-6 col-sm-12 mt-3">
                        <h5 class="text text-center">Datos Generales</h5>
                        <div class=" container-sm border border-dark">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <h5>Personales</h5>
                                    <h6>Nombre: </h6>
                                    <p> <?php echo $datos['nombre'] . " " . $datos['apepat'] . " " . $datos['apemat'] ?> </p>
                                    <h6>Correo: </h6>
                                    <p> <?php echo $datos['email'] ?> </p>
                                    <h6>Usuario: </h6>
                                    <p> <?php echo $datos['usuario'] ?> </p>
                                    <h6>Telefono: </h6>
                                    <?php if (!$datos['telefono']) : ?>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#AgregarNumModal" data-bs-id="<?php echo $datos['id_usuario']; ?>" class="btn btn-outline-warning"> <i class="fa-solid fa-plus"></i> Agregar</a>
                                    <?php endif ?>
                                    <?php if ($datos['telefono']) : ?>
                                        <p> <?php echo $datos['telefono'] ?> </p>
                                    <?php endif ?>

                                </li>
                                <?php
                                $query = "SELECT * FROM direcciones WHERE id_usuario = $idusuario";
                                $res = $db->query($query);                                ?>

                                <li class="list-group-item">
                                    <h5>Direcciones</h5>
                                    <?php while ($direccion = $res->fetch_assoc()) : ?>
                                        <p> <?php echo $direccion['calle'] . " ,Colonia " . $direccion['colonia'] . " ," . $direccion['ciudad'] . " ," . $direccion['estado'] . " ," . $direccion['codigo_postal'] ?> </p>
                                    <?php endwhile ?>

                                    <a class="btn btn-outline-dark" href="#"><i class="fa-solid fa-plus"></i> Agregar</a>
                                </li>

                                <li class="list-group-item">
                                    <h5>Metodos de Pago</h5>

                                    <a class="btn btn-outline-dark" href="#"><i class="fa-solid fa-plus"></i> Agregar</a>

                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12 mt-3">
                        <h5 class="text text-center">Mis pedidos</h5>
                        <div class=" container-sm border border-dark">
                            <h6 class="text text-center">Aun no hay pedidos</h6>
                        </div>
                    </div>
                </div>


            </div>

            <div class="col-lg-2 col-sm-12 d-flex justify-content-center ">
                <div class="container d-flex justify-content-center" style="max-height: 40px;">
                    <a href="formulario.php" class="btn btn-primary">Asociarme</a>
                </div>
            </div>
        </div>
    </div>
    <?php include '../../Modales/AgregarNumModal.php' ?>
    <?php include '../../Modales/imgUsuarioModal.php' ?>

    <script>
        let AgregarNumModal = document.getElementById('AgregarNumModal');
        let imgUsuarioModal = document.getElementById('imgUsuarioModal');

        AgregarNumModal.addEventListener('shown.bs.modal', event => {
            let button = event.relatedTarget;
            let id = button.getAttribute('data-bs-id');
            AgregarNumModal.querySelector('.modal-body #id').value = id;

        });

        imgUsuarioModal.addEventListener('shown.bs.modal', event => {
            let button = event.relatedTarget;
            let id = button.getAttribute('data-bs-id');
            imgUsuarioModal.querySelector('.modal-footer #id').value = id;

        });
    </script>

    <?php include '../../Layout/scripts.php' ?>
</body>

</html>