<?php

require_once('../Modelo/nomina.php');

if ($_POST) {
    $modeloNomina = new nomina();

    $id_nomina = $_POST['id_nomina'];
    $modeloNomina->delete($id_nomina);
}else{
    header('Location: ../../index.php');
}

?>