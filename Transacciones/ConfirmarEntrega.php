<?php  session_start();
include("../Conection/cn.php");

$id = $_GET['idPedido'];


$estadop = "Entregado";
                    
$sql_actualizar = "update pedidos set estado = ? WHERE id_pedido = ?";
                    
$cmd_actualizar = $db->prepare($sql_actualizar);
                    
$res_actualizar = $cmd_actualizar->execute([$estadop, $id]);

