<?php

include '../Conection/cn.php';

$id = $_GET['id'];
$sql = "select imgPerfil from usuarios where id_usuario= $id";
$resul = $db->query($sql);


if ($resul->num_rows) {
  $row = $resul->fetch_assoc();
  $imagen = $row["imagen"];
  header("Content-Type: image/png");
  echo $imagen;
}
