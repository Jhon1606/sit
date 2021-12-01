<?php

require_once('../Modelo/usuario.php');

if ($_POST) {
    $modeloUsuario = new usuarios();

    $id_usuario = $_POST['id_usuario'];
    $modeloUsuario->delete($id_usuario);
}else{
    header('Location: ../../index.php');
}

?>