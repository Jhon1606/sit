<?php

require_once('../Modelo/retiro.php');

if ($_POST) {
    $modeloRetiro = new retiro();

    $id_retiro = $_POST['id_retiro'];
    $modeloRetiro->delete($id_retiro);
}else{
    header('Location: ../../index.php');
}

?>