<?php

require_once('../Modelo/buzon.php');

if ($_POST) {
    $modeloBuzon = new buzon();

    $id_buzon = $_POST['id_buzon'];
    $modeloBuzon->delete($id_buzon);
}else{
    header('Location: ../../index.php');
}

?>