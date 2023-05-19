<?php
session_start();

if (isset($_SESSION)) {
    
    session_destroy();
    header("Location:/soloarte/Index.php");
    die();
} else {
    header('Location: /soloarte/Index.php');
}
