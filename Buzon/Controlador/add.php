<?php

require_once('../Modelo/buzon.php');

if ($_POST) {
    $modeloBuzon = new buzon();

    $descripcion = $_POST['descripcion'];
    $personasoli = $_POST['personasoli'];
    $asunto = $_POST['asunto'];
    $archivo = $_FILES['archivo'];
    
    $modeloBuzon->add($descripcion,$personasoli,$asunto,$archivo);
    }else{
        header('Location: ../../index.php');
    }

?>