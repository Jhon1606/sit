<?php

require_once("../../Seguridad/Modelo/seguridad.php");

$ideditar = $_POST["ideditar"];
$arreglo = array();

$modeloSeguridad = new seguridad();
$informacionSeguridad = $modeloSeguridad->getById($ideditar);

if ($informacionSeguridad != null){

    foreach ($informacionSeguridad as $infoSeguridad) {
       
        $arreglo[] = array(
                        "nombretrabajador"=>$infoSeguridad["nombretrabajador"],
                        "tipodocumento"=>$infoSeguridad["tipodocumento"],
                        "identificacion"=>$infoSeguridad["identificacion"],
                        "nacimiento"=>$infoSeguridad["nacimiento"],
                        "sexo"=>$infoSeguridad["sexo"],
                        "eps"=>$infoSeguridad["eps"],
                        "afp"=>$infoSeguridad["afp"],
                        "cargo"=>$infoSeguridad["cargo"],
                        "fechaingreso"=>$infoSeguridad["fechaingreso"],
                        "ocupacion"=>$infoSeguridad["ocupacion"],
                        "zona"=>$infoSeguridad["zona"],
                        "tipovinculacion"=>$infoSeguridad["tipovinculacion"],
                        "departamento"=>$infoSeguridad["departamento"],
                        "ciudad"=>$infoSeguridad["ciudad"],
                        "direccion"=>$infoSeguridad["direccion"],
                        "centrotrabajo"=>$infoSeguridad["centrotrabajo"],
                        "jornada"=>$infoSeguridad["jornada"],
                        "fechaevento"=>$infoSeguridad["fechaevento"],
                        "hh"=>$infoSeguridad["hh"],
                        "mm"=>$infoSeguridad["mm"],
                        "horaevento"=>$infoSeguridad["horaevento"],
                        "jornadasucede"=>$infoSeguridad["jornadasucede"],
                        "tipoevento"=>$infoSeguridad["tipoevento"],
                        "laborhabitual"=>$infoSeguridad["laborhabitual"],
                        "labor"=>$infoSeguridad["labor"],
                        "causamuerte"=>$infoSeguridad["causamuerte"],
                        "zonaevento"=>$infoSeguridad["zonaevento"],
                        "departamentoevento"=>$infoSeguridad["departamentoevento"],
                        "municipio"=>$infoSeguridad["municipio"],
                        "eventoempresa"=>$infoSeguridad["eventoempresa"],
                        "sitio"=>$infoSeguridad["sitio"],
                        "cuerpo"=>$infoSeguridad["cuerpo"],
                        "agente_evento"=>$infoSeguridad["agente_evento"],
                        "mecanismoevento"=>$infoSeguridad["mecanismoevento"],
                        "tipolesion"=>$infoSeguridad["tipolesion"],
                        "descripcion"=>$infoSeguridad["descripcion"],
                        "accidente"=>$infoSeguridad["accidente"],
                        "tipodocumento_inf"=>$infoSeguridad["tipodocumento_inf"],
                        "identificacion_inf"=>$infoSeguridad["identificacion_inf"],
                        "nombres_inf"=>$infoSeguridad["nombres_inf"],
                        "cargo_inf"=>$infoSeguridad["cargo_inf"],
                        "telefono_inf"=>$infoSeguridad["telefono_inf"], 
                        "correo_inf"=>$infoSeguridad["correo_inf"]
                        );
    }
}

echo json_encode($arreglo);

?>