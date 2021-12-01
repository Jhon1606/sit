<?php

require_once "../../Municipio/Modelo/municipio.php";

$idDepartamento = $_POST['idDepartamento'];
$idMunicipio = $_POST['idMunicipio'];

$ModeloMunicipios = new municipio();
$InformacionMunicipios = $ModeloMunicipios->verMunicipiosPorDepartamento($idDepartamento);

$selectMunicipios = "<label class='form--label' for='ciudad'>Ciudad vive</label>";
$selectMunicipios .= "<select class='form--input' name='ciudad' id='ciudad'>";

if($InformacionMunicipios != null){

    if($idMunicipio != ""){

        foreach ($InformacionMunicipios as $InfoMunicipio) {

            if($InfoMunicipio["id_municipio"] == $idMunicipio){

                $selectMunicipios .= "<option value='" . $InfoMunicipio["id_municipio"] . "'>" . $InfoMunicipio["municipio"] . "</option>";

            }    
        }
    } 
    
    $selectMunicipios .= "<option value=''>Seleccione una opción</option>";

    foreach ($InformacionMunicipios as $InfoMunicipio) {

        $selectMunicipios .= "<option value='" . $InfoMunicipio["id_municipio"] . "'>" . $InfoMunicipio["municipio"] . "</option>";

    }
}

$selectMunicipios .= "</select>";

echo $selectMunicipios;

?>