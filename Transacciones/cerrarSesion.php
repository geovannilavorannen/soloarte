<?php
session_start();

if (isset($_SESSION)) {
    
    unset($_SESSION['usuario']);
    unset($_SESSION['rol']);
    unset($_SESSION['nombre']);
    header("Location:/soloarte/Index.php");
    die();
} else {
    header('Location: /soloarte/Index.php');
}
