<?php

require_once('../Modelo/talento.php');

if ($_POST) {
    $modeloTalento = new talento();

    $turno = $_POST['turno'];
    $hora = $_POST['hora'];
    $fecha = $_POST['fecha'];
    $ciudad = $_POST['ciudad'];
    $proyecto = $_POST['proyecto'];
    $nombretrabajador = $_POST['nombretrabajador'];
    $nombresuperior = $_POST['nombresuperior'];
    $motivo = $_POST['motivo'];
    $comentarios = $_POST['comentarios'];
    $archivouno = $_POST['archivouno'];
    $archivo_uno = $_POST['archivo_uno'];
    $archivodos = $_POST['archivodos'];
    $archivo_dos = $_POST['archivo_dos'];
    $archivotres = $_POST['archivotres'];
    $archivo_tres = $_POST['archivo_tres'];
    $archivocuatro = $_POST['archivocuatro'];
    $archivo_cuatro = $_POST['archivo_cuatro'];
    
    $modeloTalento->add($turno,$hora, $fecha,$ciudad,$proyecto,$nombretrabajador,$nombresuperior,$motivo,$comentarios,
                        $archivouno,$archivo_uno,$archivodos,$archivo_dos,$archivotres,$archivo_tres,$archivocuatro,$archivo_cuatro);
    }else{
        header('Location: ../../index.php');
    }

?>