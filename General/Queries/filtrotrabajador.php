<?php

require_once("../../Trabajador/Modelo/trabajador.php");
require_once("../../General/Helpers/helpers.php");

$identificaciont = $_POST["identificaciont"];
$arreglo = array();

$modeloTrabajador = new trabajador();
$informacionTrabajador = $modeloTrabajador->cargarTrabajador($identificaciont);

if ($informacionTrabajador != null){

    foreach ($informacionTrabajador as $infoTrabajador) {
       
        $arreglo[] = array(
                            "nombretrabajadort"=>$infoTrabajador["nombretrabajadort"],
                            "tipodocumentot"=>$infoTrabajador["tipodocumentot"],
                            "identificaciont"=>$infoTrabajador["identificaciont"],
                            "nacimientot"=>$infoTrabajador["nacimientot"],
                            "sexot"=>$infoTrabajador["sexot"],
                            "epst"=>$infoTrabajador["epst"],
                            "afpt"=>$infoTrabajador["afpt"],
                            "cargot"=>$infoTrabajador["cargot"],
                            "fechaingresot"=>$infoTrabajador["fechaingresot"],
                            "ocupaciont"=>$infoTrabajador["ocupaciont"],
                            "salariot"=>$infoTrabajador["salariot"],
                            "centrodecostot"=>$infoTrabajador["centrodecostot"],
                            "zonat"=>$infoTrabajador["zonat"],
                            "tipovinculaciont"=>$infoTrabajador["tipovinculaciont"],
                            "departamentot"=>$infoTrabajador["departamentot"],
                            "ciudadt"=>$infoTrabajador["ciudadt"],
                            "direcciont"=>$infoTrabajador["direcciont"],
                            "centrotrabajot"=>$infoTrabajador["centrotrabajot"],
                            "jornadat"=>$infoTrabajador["jornadat"]
                        );
    }
}

echo json_encode($arreglo);

?>