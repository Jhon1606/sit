<?php

require_once('../Modelo/seleccion.php');

if ($_POST) {
    $modeloSeleccion = new seleccion();

    $id_requisicion = $_POST['id_requisicion'];
    $modeloSeleccion->delete($id_requisicion);
}else{
    header('Location: ../../index.php');
}

?>