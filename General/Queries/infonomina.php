<?php

require_once("../../Nomina/Modelo/nomina.php");

$ideditar = $_POST["ideditar"];
$arreglo = array();

$modeloNomina = new nomina();
$informacionNomina = $modeloNomina->getById($ideditar);

if ($informacionNomina != null){

    foreach ($informacionNomina as $infoNomina) {
       
        $arreglo[] = array(
                            "novedad_desde"=>$infoNomina["novedad_desde"],
                            "novedad_hasta"=>$infoNomina["novedad_hasta"],
                            "cedula"=>$infoNomina["cedula"],
                            "nombre"=>$infoNomina["nombre"],
                            "salario"=>$infoNomina["salario"],
                            "fechaingreso"=>$infoNomina["fechaingreso"],
                            "centrodecosto"=>$infoNomina["centrodecosto"],
                            "cargo"=>$infoNomina["cargo"],
                            "ordinario"=>$infoNomina["ordinario"],
                            "transporte"=>$infoNomina["transporte"],
                            "horasrecargo"=>$infoNomina["horasrecargo"],
                            "domingocompensado"=>$infoNomina["domingocompensado"],
                            "horasrecnocturno"=>$infoNomina["horasrecnocturno"],
                            "horasextradiurno"=>$infoNomina["horasextradiurno"],
                            "horasextranocturna"=>$infoNomina["horasextranocturna"],
                            "horasordinarias"=>$infoNomina["horasordinarias"],
                            "horasex_domingod"=>$infoNomina["horasex_domingod"],
                            "horasrecdominical"=>$infoNomina["horasrecdominical"],
                            "horasex_domingon"=>$infoNomina["horasex_domingon"],
                            "bonificacion"=>$infoNomina["bonificacion"],
                            "auxilio"=>$infoNomina["auxilio"],
                            "comision"=>$infoNomina["comision"],
                            "bonosalarial"=>$infoNomina["bonosalarial"],
                            "incapacidad"=>$infoNomina["incapacidad"],
                            "permisos"=>$infoNomina["permisos"],
                            "otro_horas"=>$infoNomina["otro_horas"],
                            "fecha_ausentismo"=>$infoNomina["fecha_ausentismo"],
                            "casino"=>$infoNomina["casino"],
                            "otro"=>$infoNomina["otro"],
                            "observaciones"=>$infoNomina["observaciones"]
                        );
    }
}

echo json_encode($arreglo);

?>