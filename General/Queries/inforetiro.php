<?php

require_once("../../Retiro/Modelo/retiro.php");

$ideditar = $_POST["ideditar"];
$arreglo = array();

$modeloRetiro = new retiro();
$informacionRetiro = $modeloRetiro->getById($ideditar);

if ($informacionRetiro != null){

    foreach ($informacionRetiro as $infoRetiro) {
       
        $arreglo[] = array(
                            "cedula"=>$infoRetiro["cedula"],
                            "nombre"=>$infoRetiro["nombre"],
                            "salario"=>$infoRetiro["salario"],
                            "centrodecosto"=>$infoRetiro["centrodecosto"],
                            "cargo"=>$infoRetiro["cargo"],
                            "fechanomina"=>$infoRetiro["fechanomina"],
                            "fecharetiro"=>$infoRetiro["fecharetiro"],
                            "cartaretiro"=>$infoRetiro["cartaretiro"],
                            "novedadesnomina"=>$infoRetiro["novedadesnomina"],
                            "pazysalvo"=>$infoRetiro["pazysalvo"],
                            "observaciones"=>$infoRetiro["observaciones"],
                            "ordinario"=>$infoRetiro["ordinario"],
                            "transporte"=>$infoRetiro["transporte"],
                            "horasrecargo"=>$infoRetiro["horasrecargo"],
                            "domingocompensado"=>$infoRetiro["domingocompensado"],
                            "horasdiurnas"=>$infoRetiro["horasdiurnas"],
                            "horasnocturnas"=>$infoRetiro["horasnocturnas"],
                            "horasdominicales"=>$infoRetiro["horasdominicales"],
                            "horasdomingo_d"=>$infoRetiro["horasdomingo_d"],
                            "horasdomingo_n"=>$infoRetiro["horasdomingo_n"],
                            "horasrec_dominical"=>$infoRetiro["horasrec_dominical"],
                            "bonificacion"=>$infoRetiro["bonificacion"],
                            "auxilio"=>$infoRetiro["auxilio"],
                            "comision"=>$infoRetiro["comision"],
                            "otro"=>$infoRetiro["otro"],
                            "incapacidad"=>$infoRetiro["incapacidad"],
                            "permisos"=>$infoRetiro["permisos"],
                            "otro_horas"=>$infoRetiro["otro_horas"],
                            "casino"=>$infoRetiro["casino"],
                            "otro_desc"=>$infoRetiro["otro_desc"],
                            "observaciones_reporte"=>$infoRetiro["observaciones_reporte"]
                        );
    }
}

echo json_encode($arreglo);

?>