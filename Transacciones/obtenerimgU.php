<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

  include '../Conection/cn.php';

  $id = $_GET['id'];
  $sql = "select imgPerfil from usuarios where id_usuario= $id LIMIT 1";
  $resul = $db->query($sql);

  $row = $resul->fetch_assoc();
  $imagen = $row["imgPerfil"];
  header("Content-Type: image/png/jpg");
  echo $imagen;
} else {
  header('Location: /soloarte');
}
