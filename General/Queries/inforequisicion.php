<?php

require_once("../../Seleccion/Modelo/seleccion.php");

$ideditar = $_POST["ideditar"];
$arreglo = array();

$modeloSeleccion = new seleccion();
$informacionSeleccion = $modeloSeleccion->getById($ideditar);

if ($informacionSeleccion != null){

    foreach ($informacionSeleccion as $infoSeleccion) {
       
        $arreglo[] = array(
                            "cargo"=>$infoSeleccion["cargo"],
                            "cantidad"=>$infoSeleccion["cantidad"],
                            "nivel"=>$infoSeleccion["nivel"],
                            "salario"=>$infoSeleccion["salario"],
                            "comisiones"=>$infoSeleccion["comisiones"],
                            "motivo"=>$infoSeleccion["motivo"],
                            "nombrelabor"=>$infoSeleccion["nombrelabor"],
                            "tiempo"=>$infoSeleccion["tiempo"],
                            "fechae"=>$infoSeleccion["fechae"],
                            "horae"=>$infoSeleccion["horae"],
                            "fechal"=>$infoSeleccion["fechal"],
                            "horal"=>$infoSeleccion["horal"],
                            "sexo"=>$infoSeleccion["sexo"],
                            "edadmin"=>$infoSeleccion["edadmin"],
                            "edadmax"=>$infoSeleccion["edadmax"],
                            "tiempolaboral"=>$infoSeleccion["tiempolaboral"],
                            "tarjetapro"=>$infoSeleccion["tarjetapro"],
                            "otroidioma"=>$infoSeleccion["otroidioma"],
                            "usoherramientas"=>$infoSeleccion["usoherramientas"],
                            "conduccion"=>$infoSeleccion["conduccion"],
                            "estudios"=>$infoSeleccion["estudios"],
                            "funciones"=>$infoSeleccion["funciones"],
                            "departamento"=>$infoSeleccion["departamento"],
                            "municipio"=>$infoSeleccion["municipio"],
                            "direccion"=>$infoSeleccion["direccion"],
                            "horario"=>$infoSeleccion["horario"],
                            "turnos"=>$infoSeleccion["turnos"],
                            "ruta"=>$infoSeleccion["ruta"],
                            "casino"=>$infoSeleccion["casino"],
                            "comentarios"=>$infoSeleccion["comentarios"]
                        );
    }
}

echo json_encode($arreglo);

?>