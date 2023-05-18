
<?php
    session_start();

    if (!isset($_SESSION['usuario'])){
        header("Location: NoAutenticado.php");


    }
       
 ?>
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../../Layout/estilos.php'  ?>
    <title>SoloArte</title>
</head>

<body>
    <?php include '../../Layout/navbarU.php';


    include("../Usuario/Carrito/nav_cart.php");
    include("../Usuario/Carrito/modal_cart.php");

    ?>

    <?php include '../../Conection/cn.php' ?>



    <div class="container mt-4">

        <h1 class="text text-center">Productos</h1>



        <?php
        $query = "select * from productos";
        $productos = $db->query($query);
        ?>

        <div class='row'>
            <?php while ($row_productos = $productos->fetch_assoc()) :  ?>
                <!-- <div class='col-4 mt-4'> -->
                <div class='col-sm-12 col-md-4 d-flex justify-content-center mt-4 mb-4'>
                    <!-- <div class='col-sm-16 col-md-4'>	 -->
                    <div class='card' style='width: 18rem;'>

                        <ul class='list-group list-group-flush'>

                            <li class='list-group-item'> <span style="font-weight: bold;"></span> <?php echo $row_productos['nombre']; ?></li>

                            <li class='list-group-item'> <span style="font-weight: bold;">Precio:</span> <?php echo $row_productos['precio']; ?></li>

                            <li class='list-group-item'> <span style="font-weight: bold;">En stock:</span> <?php echo $row_productos['stock']; ?><span></span></li>


                            <a href='../Usuario/DetallesProducto.php?idProducto= <?php echo $row_productos['id_producto']; ?>' class='btn btn-primary'>Mas Detalles</a>

                            <a href='../Usuario//Carrito/ProductoSeleccionado.php?idProducto= <?php echo $row_productos['id_producto']; ?>' class='btn btn-success fas fa-shopping-cart'></i></a>


                            </span>



                        </ul>
                    </div>
                </div>
            <?php endwhile ?>

        </div>

        </form>


    </div>

    <?php include '../../Layout/scripts.php' ?>
</body>

</html>