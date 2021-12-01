<?php

require_once("../../Buzon/Modelo/buzon.php");
require_once("../../General/Helpers/helpers.php");

$ideditar = $_POST["ideditar"];
$arreglo = array();

$modeloBuzon = new buzon();
$informacionBuzon = $modeloBuzon->getById($ideditar);

if ($informacionBuzon != null){

    foreach ($informacionBuzon as $infoBuzon) {
       
        $arreglo[] = array(
                            "descripcion"=>$infoBuzon["descripcion"],
                            "registro"=>formatDate($infoBuzon["registro"]),
                            "respuesta"=>$infoBuzon["respuesta"],
                            "fecharespuesta"=>$infoBuzon["fecharespuesta"],
                            "personasoli"=>$infoBuzon["personasoli"],
                            "asunto"=>$infoBuzon["asunto"],
                            "archivo"=>$infoBuzon["archivo"],
                            "estado"=>$infoBuzon["estado"]
                        );
    }
}

echo json_encode($arreglo);

?>