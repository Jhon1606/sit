<?php

require_once("../../Talento/Modelo/talento.php");

$ideditar = $_POST["ideditar"];
$arreglo = array();

$modeloTalento = new talento();
$informacionTalento = $modeloTalento->getById($ideditar);

if ($informacionTalento != null){

    foreach ($informacionTalento as $infoTalento) {
       
        $arreglo[] = array(
            "turno"=>$infoTalento["turno"],
            "hora"=>$infoTalento["hora"],
            "fecha"=>$infoTalento["fecha"],
            "ciudad"=>$infoTalento["ciudad"],
            "proyecto"=>$infoTalento["proyecto"],
            "nombretrabajador"=>$infoTalento["nombretrabajador"],
            "nombresuperior"=>$infoTalento["nombresuperior"],
            "motivo"=>$infoTalento["motivo"],
            "comentarios"=>$infoTalento["comentarios"]
            "archivouno"=>$infoTalento["archivouno"],
            "archivo_uno"=>$infoTalento["archivo_uno"],
            "archivodos"=>$infoTalento["archivodos"],
            "archivo_dos"=>$infoTalento["archivo_dos"],
            "archivotres"=>$infoTalento["archivotres"],
            "archivo_tres"=>$infoTalento["archivo_tres"],
            "archivocuatro"=>$infoTalento["archivocuatro"],
            "archivo_cuatro"=>$infoTalento["archivo_cuatro"],
                        );
    }
}

echo json_encode($arreglo);

?>