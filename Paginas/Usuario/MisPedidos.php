<?php

session_start();

$idUP = $_SESSION['usuario']; 

    include("../../Conection/cn.php");
       
?>
<?php
    

       
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Pedidos</title>
    <?php
    include("../../Layout/estilos.php");
    include '../../Layout/navbarU.php';
    ?>
</head>
<body>


<div class="container mt-3">
    <h3 class= "text text-center">Mis Pedidos</h3>


 
<?php
    $query = "select * from pedidos where id_usuario = $idUP";
    $pedidos = $db->query($query);
 
?>

       <div class='row'>
            <?php while ($row_pedidos = $pedidos->fetch_assoc()) :  ?>
                <div class='col-4 mt-4'>
                    <div class='card' style='width: 18rem;'>


                
                        <ul class='list-group list-group-flush'>
                        
                            <li class='list-group-item'> <span style="font-weight: bold;">Numero de pedido:</span> <?php echo $row_pedidos['id_pedido'];?></li>
                            <li class='list-group-item'> <span style="font-weight: bold;">Total de artiuculos:</span> <?php echo $row_pedidos['cantidad'];?></li>
                            <li class='list-group-item'> <span style="font-weight: bold;">Descripcion:</span> <?php echo $row_pedidos['articulo'];?></li>
                            <li class='list-group-item'> <span style="font-weight: bold;">Total paga:</span> <?php echo $row_pedidos['precio'];?></li>
                            <li class='list-group-item'> <span style="font-weight: bold;">Estado:</span> <?php echo $row_pedidos['estado'];?></li>

                          
                            
                        </span> 
                            
                           
                            
                        </ul>
                    </div>
                </div>
            <?php endwhile ?>
        </div>    

</div>
</body>
</html>