<?php

require_once("../../Usuarios/Modelo/usuario.php");

$ideditar = $_POST["ideditar"];
$arreglo = array();

$modeloUsuario = new usuarios();
$informacionUsuario = $modeloUsuario->getById($ideditar);

if ($informacionUsuario != null){

    foreach ($informacionUsuario as $infoUsuario) {
       
        $arreglo[] = array(
                        "nombre_completo"=>$infoUsuario["nombre_completo"],
                        "correo"=>$infoUsuario["correo"],
                        "usuario"=>$infoUsuario["usuario"],
                        "contrasena"=>$infoUsuario["contrasena"],
                        "perfil"=>$infoUsuario["perfil"],
                        "fecha_registro"=>$infoUsuario["fecha_registro"],
                        "estado"=>$infoUsuario["estado"]
                        );
    }
}

echo json_encode($arreglo);

?>