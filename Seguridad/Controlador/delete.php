<?php

require_once('../Modelo/seguridad.php');

if ($_POST) {
    $modeloSeguridad = new seguridad();

    $id_seguridad = $_POST['id_seguridad'];
    $modeloSeguridad->delete($id_seguridad);
}else{
    header('Location: ../../index.php');
}

?>