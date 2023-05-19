<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    require '../Conection/cn.php';

    $idusuario = $_POST['id'];

    $imagen = $_FILES['imagen']['name'];
    $directorio = $_FILES['imagen']['tmp_name'];
    $tamanio = $_FILES['imagen']['size'];

    $imagen = file_get_contents($directorio);
    $imagen = imagecreatefromjpeg($directorio);

     // Dimensiones de la imagen original
     $anchoOriginal = imagesx($imagen);
     $altoOriginal = imagesy($imagen);
 

    // Calcular las dimensiones de recorte manteniendo la relación de aspecto 1:1
    if ($anchoOriginal > $altoOriginal) {
        $anchoRecorte = $altoOriginal;
        $altoRecorte = $altoOriginal;
        $x = floor(($anchoOriginal - $altoOriginal) / 2);
        $y = 0;
    } else {
        $anchoRecorte = $anchoOriginal;
        $altoRecorte = $anchoOriginal;
        $x = 0;
        $y = floor(($altoOriginal - $anchoOriginal) / 2);
    }

    // Crear una nueva imagen con las dimensiones de recorte
    $nuevaImagen = imagecreatetruecolor($anchoRecorte, $altoRecorte);

    // Recortar la imagen original y copiarla en la nueva imagen
    imagecopyresampled($nuevaImagen, $imagen, 0, 0, $x, $y, $anchoRecorte, $altoRecorte, $anchoRecorte, $altoRecorte);

    // Obtener el contenido de la imagen recortada como una cadena binaria
    ob_start();
    imagejpeg($nuevaImagen);
    $contenidoImagen = ob_get_clean();

    // Liberar memoria
    imagedestroy($imagen);
    imagedestroy($nuevaImagen);



    $sql = "UPDATE usuarios SET imgPerfil = ? WHERE id_usuario = ? ";
    $cmd = $db->prepare($sql);
    $res = $cmd->execute([$contenidoImagen, $idusuario]);

    if ($res) {
        header('Location: /soloarte/Paginas/Usuario/PerfilUsuario.php?resul=2');
    } else {
        header('Location: /soloarte/Paginas/Usuario/PerfilUsuario.php?resul=3');
    }
} else {
    header('Location: /soloarte');
}
