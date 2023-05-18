<?php  session_start();
include("../../../Conection/cn.php");


$idUsu = $_SESSION["usuario"];
//insertamos el pedido

if(isset($_SESSION['carrito'])){
    $carrito_mio=$_SESSION['carrito'];
    // $_SESSION['carrito']=$carrito_mio;
    }



            if(isset($_SESSION['carrito'])){
                $articulosConcatenados = '';
                $total_precio = 0;
            $total=0;
            for($i=0;$i<=count($carrito_mio);$i ++){
                if(isset($carrito_mio[$i])){
                if($carrito_mio[$i]!=NULL){
        
                    $cantidad = $carrito_mio[$i]['cantidad'];
                    $articulo = $carrito_mio[$i]['titulo'];
                    $precio = $carrito_mio[$i]['precio'];
                    
                    $estado = "Falta metodo pago";
                    $fecha = date("Y-m-d");

                  
                    $articulosConcatenados .= $cantidad . ' ' . $articulo . ', ';
                    
                    $cantitadArt +=1;
                    $totalpagr += $total_precio + $carrito_mio[$i]['precio'];;

                    $sql_actualizar = "update productos set stock = stock - ? WHERE nombre = ?";
                    $cmd_actualizar = $db->prepare($sql_actualizar);
                    $res_actualizar = $cmd_actualizar->execute([$cantidad, $articulo]);
                    
                    //insertar pedido 
                    
           
            }
            }
            }
            $articulosConcatenados = rtrim($articulosConcatenados, ', ');

            $cantitadArt -=1;
            $total_precio += $total_precio;// tambien agregar el poter
                $sql = "insert into pedidos (cantidad,articulo,precio,total,estado,id_usuario,fecha_pedido)                           
                values(?,?,?,?,?,?,?)";
                $cmd = $db->prepare($sql);
                $res = $cmd->execute([$cantitadArt,$articulosConcatenados,$totalpagr,$total_precio,$estado,$idUsu,$fecha]);
            }


       
            if(isset($_SESSION['carrito'])){
            $total=0;
            for($i=0;$i<=count($carrito_mio)-1;$i ++){
                if(isset($carrito_mio[$i])){
            if($carrito_mio[$i]!=NULL){ 
            $total=$total + ($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
            }
            }}}
            if(!isset($total)){$total = '0';}else{ $total = $total;}
            //echo $total; 


        

unset( $_SESSION["carrito"] ); 

header("Location: ../Productos.php");
