<?php

require_once("../Modelo/usuario.php");

if ($_POST) {
    $usuario = $_POST['usuario'];
    $password = $_POST['contrasena'];

    $modelo = new usuarios();
   if($modelo->login($usuario,$password)){
        header('Location: ../../Inicio/Vista/index.php');
   }else{
        header('Location: ../../index.php');
   }
}

?>