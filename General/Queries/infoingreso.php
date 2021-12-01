<?php

require_once("../../Ingreso/Modelo/ingreso.php");

$ideditar = $_POST["ideditar"];
$arreglo = array();

$modeloIngreso = new ingreso();
$informacionIngreso = $modeloIngreso->getById($ideditar);

if ($informacionIngreso != null){

    foreach ($informacionIngreso as $infoIngreso) {
       
        $arreglo[] = array(
                            "cedula"=>$infoIngreso["cedula"],
                            "nombre"=>$infoIngreso["nombre"],
                            "cargo"=>$infoIngreso["cargo"],
                            "asignacion"=>$infoIngreso["asignacion"],
                            "fechai"=>$infoIngreso["fechai"],
                            "nomina"=>$infoIngreso["nomina"],
                            "ciudad"=>$infoIngreso["ciudad"],
                            "centrocosto"=>$infoIngreso["centrocosto"],
                            "nivelriesgo"=>$infoIngreso["nivelriesgo"],
                            "procesoseleccion"=>$infoIngreso["procesoseleccion"],
                            "motivo"=>$infoIngreso["motivo"],
                            "nombrelabor"=>$infoIngreso["nombrelabor"],
                            "tiempo"=>$infoIngreso["tiempo"],
                            "telseleccion"=>$infoIngreso["telseleccion"],
                            "comentarios"=>$infoIngreso["comentarios"]
                        );
    }
}

echo json_encode($arreglo);

?>