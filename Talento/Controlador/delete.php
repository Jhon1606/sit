<?php

require_once('../Modelo/talento.php');

if ($_POST) {
    $modeloTalento = new talento();

    $id_talento = $_POST['id_talento'];
    $modeloTalento->delete($id_talento);
}else{
    header('Location: ../../index.php');
}

?>