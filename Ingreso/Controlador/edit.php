<?php

require_once('../Modelo/ingreso.php');

if ($_POST) {
    $modeloIngreso = new ingreso();

    $id_ingreso = $_POST['id_ingreso'];
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $cargo = $_POST['cargo'];
    $asignacion = $_POST['asignacion'];
    $fechai = $_POST['fechai'];
    $nomina = $_POST['nomina'];
    $ciudad = $_POST['ciudad'];
    $centrocosto = $_POST['centrocosto'];
    $nivelriesgo = $_POST['nivelriesgo'];
    $procesoseleccion = $_POST['procesoseleccion'];
    $motivo = $_POST['motivo'];
    $nombrelabor = $_POST['nombrelabor'];
    $tiempo = $_POST['tiempo'];
    $telseleccion = $_POST['telseleccion'];
    $comentarios = $_POST['comentarios'];

    $modeloIngreso->update($id_ingreso, $cedula,$nombre,$cargo,$asignacion,$fechai,$nomina,$ciudad,$centrocosto,$nivelriesgo,$procesoseleccion,$motivo,$nombrelabor,
                            $tiempo,$telseleccion,$comentarios);
    }else{
        header('Location: ../Vista/index.php');
    }

?>