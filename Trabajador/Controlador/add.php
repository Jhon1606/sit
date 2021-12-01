<?php

require_once('../Modelo/trabajador.php');

if ($_POST) {
    $modeloTrabajador = new trabajador();

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
    
    $modeloTrabajador->add($nombretrabajadort,$tipodocumentot,$identificaciont,$nacimientot,
                            $sexot,$epst,$afpt,$cargot, $fechaingresot, $ocupaciont, $salariot, $centrodecostot, $zonat,$tipovinculaciont, 
                            $departamentot, $ciudadt,$direcciont, $centrotrabajot, $jornadat);
    }else{
        header('Location: ../../index.php');
    }

?>