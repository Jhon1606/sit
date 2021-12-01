<?php

require_once('../Modelo/ingreso.php');

if ($_POST) {
    $modeloIngreso = new ingreso();

    $id_ingreso = $_POST['id_ingreso'];
    $modeloIngreso->delete($id_ingreso);
}else{
    header('Location: ../../index.php');
}

?>