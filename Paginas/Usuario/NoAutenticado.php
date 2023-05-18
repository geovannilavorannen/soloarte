<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <?php include("../../Layout/estilos.php") ?>
</head>

<body>
    <?php include("../../Layout/navbar.php") ?>

    <div class="container text-center mt-4" style="width: auto margin: auto ">
        <div class=" card col-md-6 offset-md-3" style="width: col-md-6;">
            <img src="https://cdn-icons-png.flaticon.com/512/5741/5741333.png" class="card-img-top "
                style="width: col-md-6;" alt="...">
            <div class="card-body" style="col-md-6">
                <h2 class="card-title text-danger">Atención!!!!</h2>
                <h5 class="card-text text-center text-warning">No has iniciadop sesion, para poder ingresar a estas paginas necesitas iniciar sesion</h5>
                <p class="card-text"></p>
                <a href="../../Index.php" class="btn btn-lg btn-outline-primary">Volver a principal</a>
                <a href="../login.php" class="btn btn-lg btn-outline-success">Iniciar Sesion</a>
            </div>
        </div>
    </div>
    <?php include("../../Layout/scripts.php");
    ?>
    
    
</body>

</html>