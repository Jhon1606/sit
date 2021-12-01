<?php

require_once('../Modelo/trabajador.php');

if ($_POST) {
    $modeloTrabajador = new trabajador();

    $id_infseguridad = $_POST['id_infseguridad'];
    $modeloTrabajador->delete($id_infseguridad);
}else{
    header('Location: ../../index.php');
}

?>