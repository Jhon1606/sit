<?php

require_once('../Modelo/seleccion.php');

if ($_POST) {
    $modeloSeleccion = new seleccion();

    $id_requisicion = $_POST['id_requisicion'];
    $cargo = $_POST['cargo'];
    $cantidad = $_POST['cantidad'];
    $nivel = $_POST['nivel'];
    $salario = $_POST['salario'];
    $comisiones = $_POST['comisiones'];
    $motivo = $_POST['motivo'];
    $nombrelabor = $_POST['nombrelabor'];
    $tiempo = $_POST['tiempo'];
    $fechae = $_POST ['fechae'];
    $horae = $_POST['horae'];
    $fechal = $_POST['fechal'];
    $horal = $_POST['horal'];
    $sexo = $_POST['sexo'];
    $edadmin = $_POST['edadmin'];
    $edadmax = $_POST['edadmax'];
    $tiempolaboral = $_POST['tiempolaboral'];
    $tarjetapro = $_POST['tarjetapro'];
    $otroidioma = $_POST['otroidioma'];
    $usoherramientas = $_POST['usoherramientas'];
    $conduccion = $_POST['conduccion'];
    $estudios = $_POST['estudios'];
    $funciones = $_POST['funciones'];
    $departamento = $_POST['departamento'];
    $municipio = $_POST['municipio'];
    $direccion = $_POST['direccion'];
    $horario = $_POST['horario'];
    $turnos = $_POST['turnos'];
    $ruta = $_POST['ruta'];
    $casino = $_POST['casino'];
    $comentarios = $_POST['comentarios'];

    $modeloSeleccion->update($id_requisicion,$cargo,$cantidad,$nivel,$salario,$comisiones,$motivo,$nombrelabor,$tiempo,$fechae,$horae,$fechal,$horal,
                                $sexo,$edadmin,$edadmax,$tiempolaboral,$tarjetapro,$otroidioma,$usoherramientas,$conduccion,$estudios,
                                $funciones,$departamento,$municipio,$direccion,$horario,$turnos,$ruta,$casino,$comentarios);
    }else{
        header('Location: ../Vista/index.php');
    }

?>