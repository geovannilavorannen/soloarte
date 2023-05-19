<?php
    session_start();

    if (!isset($_SESSION['usuario'])){
        header("Location: NoAutenticado.php");


    }

    if ($_SESSION['rol'] != 1) {

        header("Location: NoAutorizado.php");

    }
       
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Creador</title>
    <?php
    include("../../Layout/estilos.php");
    ?>
</head>

<body>

    <div class="container">
        <form action="../../Transacciones/Creadores/AgregarCreadoresBD.php" method="post" enctype="multipart/form-data">
            
            
            <h3 class="text-center text-primary">Agregar Creador</h3>

            <div class="row">
                <div class="col-md-6">
                    <label for="txtNombreCreador">Ingresa el nombre o alias del creador</label>
                    <textarea name="nombreCreador" id="txtNombreCreador" class="form-control"></textarea>
                    <label for="txtApM">Ingresa el apellido Materno</label>
                    <textarea name="apellidoCreadorM" id="txtApM" class="form-control"></textarea>
                    <label for="txtApP">Ingresa el apellido Paterno</label>
                    <textarea name="apellidoCreadorP" id="txtApP" class="form-control"></textarea>

                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="txtEdad">Ingrese la edad</label>
                    <input type="number" name="edadCreador" id="txtEdad" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="txtDescripcion">Ingrese la Descripcion del creador</label>
                    <textarea name="descripcionCreador" id="txtDescripcion" class="form-control"></textarea>

                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="imgFotoCreador" class="form-label">Seleccione una foto de perfil para el creador</label>
                        <input class="form-control" type="file" id="imgFotoCreador" name="fotoCreador">
                    </div>
                </div>
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-lg btn-success">Guardar</button>
                <a href="Principal.php" class="btn btn-lg btn-outline-info">Regresar</a>
                <a href="MostrarCreadores.php" class="btn btn-lg btn-outline-info">Mostrar Creadores</a>
               
            </div>


        </form>
    </div>



    <?php
    include("../Layout/scripts.php");
    ?>
</body>

</html>