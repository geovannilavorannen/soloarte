<?php

//session_start();

    
       
?>
<?php

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
    <title>Mostrar Creadores</title>
    <?php
    include("../../Layout/estilos.php");
    include '../../Layout/navbarU.php';
    include("../../Conection/cn.php");
    ?>
</head>
<body>

<?php include '../../Layout/navbarU.php' ?>
<div class="container mt-3">
    <h3 class= "text text-center">Creadores</h3>


 
<?php
    $query = "select * from Creadores";
    $creadores = $db->query($query);
 
?>

       <div class='row'>
            <?php while ($row_creadores = $creadores->fetch_assoc()) :  ?>
                <div class='col-4 mt-4'>
                    <div class='card' style='width: 18rem;'>


                    <?php

                    $imageData = $row_creadores ['imagen'];

                     if(!empty($imageData)) {
                    // Encode the image data using base64
                    $encodedImage = base64_encode($imageData);
                    // Embed the encoded image in the img tag using the data URI scheme
                    echo "<img src='data:image/jpeg;base64,$encodedImage' class='card-img-top' alt='N/A'>";
                }

                    ?>
                    
                        <ul class='list-group list-group-flush'>
                        
                            <li class='list-group-item'> <span style="font-weight: bold;">Nombre:</span> <?php echo $row_creadores['nombre'];?></li>
                          
                            <li class='list-group-item'> <span style="font-weight: bold;">Edad:</span> <?php echo $row_creadores ['edad']; ?></li>
                            <li class='list-group-item'> <span style="font-weight: bold;">Descripcion:</span> <?php echo $row_creadores ['descripcion']; ?><span></span></li>
                

                        </span> 
                            
                           
                            
                        </ul>
                    </div>
                </div>
            <?php endwhile ?>
        </div>    

</div>
</body>
</html>