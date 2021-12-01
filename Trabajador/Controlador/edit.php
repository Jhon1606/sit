<?php

require_once('../Modelo/trabajador.php');

if ($_POST) {
    $modeloTrabajador = new trabajador();

    $id_infseguridad = $_POST['id_infseguridad'];
    $nombretrabajadort = $_POST['nombretrabajadort'];
    $tipodocumentot = $_POST['tipodocumentot'];
    $identificaciont = $_POST['identificaciont'];
    $nacimientot = $_POST['nacimientot'];
    $sexot = $_POST['sexot'];
    $epst = $_POST['epst'];
    $afpt = $_POST['afpt'];
    $cargot = $_POST['cargot'];
    $fechaingresot = $_POST['fechaingresot'];
    $ocupaciont = $_POST['ocupaciont'];
    $salariot = $_POST['salariot'];
    $centrodecostot = $_POST['centrodecostot'];
    $zonat = $_POST['zonat'];
    $tipovinculaciont = $_POST['tipovinculaciont'];
    $departamentot = $_POST['departamentot'];
    $ciudadt = $_POST['ciudadt'];
    $direcciont = $_POST['direcciont'];
    $centrotrabajot = $_POST['centrotrabajot'];
    $jornadat = $_POST['jornadat'];

    $modeloTrabajador->update($id_infseguridad,$nombretrabajadort,$tipodocumentot,$identificaciont,$nacimientot,
                                $sexot,$epst,$afpt,$cargot,$fechaingresot,$ocupaciont, $salariot, $centrodecostot, $zonat,$tipovinculaciont,
                                $departamentot,$ciudadt,$direcciont,$centrotrabajot,$jornadat);
    }else{
        header('Location: ../Vista/index.php');
    }

?>