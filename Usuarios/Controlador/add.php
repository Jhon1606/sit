<?php

require_once('../Modelo/usuario.php');

if ($_POST) {
    $modeloUsuario = new usuarios();

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $perfil = $_POST['perfil'];
    $fecha_registro = $_POST['fecha_registro'];
    $estado = $_POST['estado'];
    
    $modeloUsuario->add($nombre_completo,$correo,$usuario,$contrasena,$perfil,$fecha_registro,$estado);
    }else{
        header('Location: ../../index.php');
    }

?>