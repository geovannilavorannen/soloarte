<?php  
session_start();

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>

<script src="../Alert/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="../Alert/sweetalert.css">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

 <!-- ESTILO CURSOS DE PROGRAMACION -->
 <link rel="stylesheet" href="../css/style_cp.css">


<title>Metodo de envio</title>
</head>
<body>


<style>
.container_card{    margin: 0 auto;    padding:  0px 20px 20px 20px;    display: grid;    /* width: 800px; */    grid-template-columns: 1fr 1fr ;   grid-gap:1em;        /* grid-row-gap: 60px; */}
.blog-post{    position: relative;    margin-bottom: 15px;    margin: 30px;}
.blog-post img{    width: 100%;    height: 450px;    object-fit: cover;    border-radius: 10px;    }
.blog-post .category{    position: absolute;    top: 20px;    left: 20px;    padding: 10px 15px;  font-size: 14px;    text-decoration: none;    background-color: #e67e22;    color: #fff;    border-radius: 5px;    box-shadow: 1px 1px 8px rgba(0,0,0,0.1);    text-transform: uppercase;}
.text-content{    position: absolute;    bottom: -30px;    padding: 20px;    background-color: #fff;    width: calc(100% - 20px);    left: 50%;    transform: translateX(-50%);    border-radius: 10px;    box-shadow: 1px 1px 8px rgba(0,0,0,0.08);/* padding-top: 50px; */}
.text-content h2{    font-size: 20px;    font-weight: 400;    /* margin-bottom: 30px; */}
.text-content img{    height: 70px;    width: 70px;    border: 5px solid rgba(0,0,0,0.1);    border-radius: 50%;    position: absolute;    top: -35px;    left: 35px;}
.tags a{    color: #888;    font-weight: 700;    text-decoration: none;    margin-right: 15px;    transition: 0.3s ease;}
.tags a:hover{    color: #000;}
@media screen and (max-width: 1100px) {    .container_card{        grid-template-columns: 1fr 1fr;        grid-row-gap: 60px;    }}
@media screen and (max-width: 600px) {    .container_card{        grid-template-columns: 1fr;        grid-row-gap: 60px;    }}
</style>


<!-- NAVBAR -->
<?php 

include '../../../Layout/navbarU.php';

?>



<a type="button" class="btn btn-primary my-4" href="javascript:history.back()">Regresar</a>
    <a type="button" class="btn btn-success my-4" href="../Carrito/ConfirmarCompra.php">Ya casi es tuyo</a>


<!-- vista E -->
<div class="center mt-5">
    <div class="card pt-3" >
            <p style="font-weight: bold; color: #0F6BB7; font-size: 22px;">Metodo de envio</p>
        <div class="container-fluid p-2">
          
          
            <div class="container_card">
            
                        <form id="formulario" name="formulario" method="post" action="cart.php">
                        <div class="blog-post ">
                        <img src="../../../Images/FedEx.png" alt="Man">
                        <a target="_blank" class="category">
                        200 MEX
                        </a>
                        <div class="text-content">
                        <input name="ref" type="hidden" id="ref" value="portes" />                           
                        <input name="precio" type="hidden" id="precio" value="20" />
                        <input name="titulo" type="hidden" id="titulo" value="Porter de envio: Fedex" />
                        <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
                        <div class="card-body">
                        <h5 class="card-title">Fedex</h5>
                        <p>24h.</p>
                        <button class="btn btn-primary" type="submit" ><i class="fas fa-shopping-cart"></i> Seleccionar envio</button>
                        </div>
                        </div>
                        </div>
                        </form>



                        <form id="formulario" name="formulario" method="post" action="cart.php">
                        <div class="blog-post ">
                        <img src="../../../Images/dhl.jpg" alt="Man">
                        <a target="_blank" class="category">
                        150 MEX
                        </a>
                        <div class="text-content">
                        <input name="ref" type="hidden" id="ref" value="portes" />                           
                        <input name="precio" type="hidden" id="precio" value="10" />
                        <input name="titulo" type="hidden" id="titulo" value="Porter de envio: Empresa 002" />
                        <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
                        <div class="card-body">
                        <h5 class="card-title">DHL</h5>
                        <p>48h.</p>
                        <button class="btn btn-primary" type="submit" ><i class="fas fa-shopping-cart"></i> Seleccionar envio</button>
                        </div>
                        </div>
                        </div>
                        </form>



                        <form id="formulario" name="formulario" method="post" action="cart.php">
                        <div class="blog-post ">
                        <img src="../../../Images/CM.png" alt="Man">
                        <a target="_blank" class="category">
                        GRATIS
                        </a>
                        <div class="text-content">
                        <input name="ref" type="hidden" id="ref" value="portes" />                           
                        <input name="precio" type="hidden" id="precio" value="0" />
                        <input name="titulo" type="hidden" id="titulo" value="Porter de envio: Empresa 003" />
                        <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
                        <div class="card-body">
                        <h5 class="card-title">Correos de Mexico</h5>
                        <p>72h.</p>
                        <button class="btn btn-primary" type="submit" ><i class="fas fa-shopping-cart"></i> Seleccionar envio</button>
                        </div>
                        </div>
                        </div>
                        </form>
               
            </div>
        </div>

      
    </div>

     
    
</div>
<!-- END vista E -->





<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>

</body>
</html>








