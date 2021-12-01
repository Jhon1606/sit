<?php

require_once('../Modelo/buzon.php');

if ($_POST) {
    $modeloBuzon = new buzon();

    $id_buzon = $_POST['id_buzon'];
    $descripcion = $_POST['descripcion'];
    $respuesta = $_POST['respuesta'];
    $fecharespuesta = $_POST['fecharespuesta'];
    $personasoli = $_POST['personasoli'];
    $asunto = $_POST['asunto'];
    $archivo = $_FILES['archivo'];
    $estado = $_POST['estado'];

    $modeloBuzon->update($id_buzon,$descripcion,$respuesta,$fecharespuesta,$personasoli,$asunto,$archivo, $estado);
    }else{
        header('Location: ../Vista/index.php');
    }

?>