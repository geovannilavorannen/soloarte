<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../Layout/estilos.php'  ?>
    <title>Crear Usuario</title>
</head>

<body>
    <?php 
    
    $resultado = $_GET['resul'] ?? null;
    
    if ($resultado  === "1") : ?>

        <script>
            Swal.fire(
                'Error al registrarse',
                'Este correo ya existe',
                'warning'
            );
        </script>

    <?php endif ?>

    <section class="" style="background-color: #eee; height: 100%;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-4">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4 text-dark">Somos mas que una compañía</h4>
                                    <p class="small mb-0 text-dark">Imagen</p>
                                </div>
                            </div>
                            <div class="col-lg-8 d-flex align-items-center gradient-custom-2">


                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src="../Images/logo.jpg" style="width: 185px;" alt="logo">
                                        <h4 class="mt-1 mb-3 pb-1">Registrate</h4>
                                    </div>

                                    <form action="../Transacciones/crearUsuario.php" onsubmit="validarPasswords(event);" method="POST" id="crearUsuario">

                                        <div class="row g-0">
                                            <div class="form-outline mb-4 col-lg-4  p-1">
                                                <input type="text" name="nombre" id="nombre" class="form-control" required />
                                                <label class="form-label" for="nombre">Nombre</label>
                                            </div>

                                            <div class="form-outline mb-4 col-lg-4  p-1">
                                                <input type="text" name="apepat" id="apepat" class="form-control" required />
                                                <label class="form-label" for="apepat">Primer Apellido</label>
                                            </div>

                                            <div class="form-outline mb-4 col-lg-4  p-1">
                                                <input type="text" name="apemat" id="apemat" class="form-control" required />
                                                <label class="form-label" for="apemat">Segundo Apellido</label>
                                            </div>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="text" name="usuario" id="usuario" class="form-control" required />
                                            <label class="form-label" for="usuario">Crea un Usuario</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="email" name="email" id="email" class="form-control" placeholder="Direcion de Correo electronico" required />
                                            <label class="form-label" for="email">Correo Electrónico</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" name="password" id="password" class="form-control" required />
                                            <label class="form-label" for="password">Contraseña</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" name="password" id="password2" class="form-control" required />
                                            <label class="form-label" for="password2">Vuelve a escribir tu contraseña</label>
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">

                                            <button type="submit" class="btn btn-primary" id="login">Crear Cuenta</button>
                                            <!-- <a class="text-muted" href="#!">Forgot password?</a> -->
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function validarPasswords(event) {

            const password = document.getElementById("password").value;
            const password2 = document.getElementById("password2").value;


            if (password === password2) {
                document.getElementById("crearUsuario").submit();
            } else {

                event.preventDefault();
                Swal.fire(
                    'Cuidado',
                    'Las contraseñas no coinciden, inténtelo de nuevo.',
                    'warning'
                )

            }
        }
    </script>

    <?php include '../Layout/scripts.php' ?>


</body>

</html>