<?php
    session_start();

    if (!isset($_SESSION['usuario'])){
        header("Location: /soloarte/Paginas/Admin/NoAutenticado.php");


    }
 
 ?>
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Producto</title>

    <?php include '../../Layout/estilos.php' ?>

</head>

<body>
    <?php include '../../Layout/navbar.php' ?>

    <?php
         session_start();

    //conexion para la base de datos y consultar los productos
    
    require '../../Conection/cn.php';


     $id = $_GET['idProducto'];

    
    $query = "select * from productos where id_producto = $id";
    $producto = $db->query($query);
    ?>

    <h1 class="text text-center"> <?php echo $row_productos['nombre'];?></h1>
    
    
    <div class="row-2   ">
        <?php foreach ($productos as $p) ?>
        <div class='col-4 mt-4'></div>
        <div class='card' style='width: 18rem;'></div>



        <div class="container">
            <div class="col-md-6 order-md-1">
                <img src="../Images/CB1.jpg" alt="">
                <h2 class="text text-black">Nombre del producto
                    <?php //echo $p->$nombre?>
                </h2>
                <h3 class="text text-body">Descripcion
                    <?php //echo $p->$descripcion?>
                </h3>
                <h3 class="text text-black-50">$ Precio
                    <?php //echo $p-$precio?>
                </h3>
                <h4 class="text text-primary">Stock disponible
                    <?php //echo $p->Stock?>
                </h4>
                <div class="d-grip col-10 mx-auto">
                    <button class="btn btn-lg btn-primary">Agregar a carrito</button>

                </div>

                <div class="d-grip mt-2 col-10 mx-auto">
                    <button class="btn btn-lg btn-outline-info">Comprar ahora</button>
                </div>

                <div class="container mt-4">
                    <div class="card text-bg-dark">
                        <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_1280.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title text-white">Conoce mas sobre la informacion del creador </h5>
                            <p class="card-text text-white">Espacio para mostar informacion adicional</p>
                            <p class="card-text text-white"><small>Consultar productos del creador</small></p>
                            <!-- <button class="btn btn-lg btn-outline-light">Conoce más</button> -->
                            <a href="../Paginas/InfoCreador.php" class="btn btn-lg btn-outline-light">Conoce más</a>
                        </div>
                    </div>
                </div>

                <!-- <button type="button" class="button button-qty" data-quantity="plus">Boton</button>  -->

            </div>
        </div>
    </div>




    <?php include '../Layout/scripts.php' ?>
</body>

</html>