<?php

require_once('../Modelo/seguridad.php');

if ($_POST) {
    $modeloSeguridad = new seguridad();

    $nombretrabajador = $_POST['nombretrabajador'];
    $tipodocumento = $_POST['tipodocumento'];
    $identificacion = $_POST['identificacion'];
    $nacimiento = $_POST['nacimiento'];
    $sexo = $_POST['sexo'];
    $eps = $_POST['eps'];
    $afp = $_POST['afp'];
    $cargo = $_POST['cargo'];
    $fechaingreso = $_POST['fechaingreso'];
    $ocupacion = $_POST['ocupacion'];
    $zona = $_POST['zona'];
    $tipovinculacion = $_POST['tipovinculacion'];
    $departamento = $_POST['departamento'];
    $ciudad = $_POST['ciudad'];
    $direccion = $_POST['direccion'];
    $centrotrabajo = $_POST['centrotrabajo'];
    $jornada = $_POST['jornada'];
    $fechaevento = $_POST['fechaevento'];
    $fechaingreso = $_POST['fechaingreso'];
    $hh = $_POST['hh'];
    $mm = $_POST['mm'];
    $horaevento = $_POST['horaevento'];
    $jornadasucede = $_POST['jornadasucede'];
    $tipoevento = $_POST['tipoevento'];
    $laborhabitual = $_POST['laborhabitual'];
    $labor = $_POST['labor'];
    $causamuerte = $_POST['causamuerte'];
    $zonaevento = $_POST['zonaevento'];
    $departamentoevento = $_POST['departamentoevento'];
    $municipio = $_POST['municipio'];
    $eventoempresa = $_POST['eventoempresa'];
    $sitio = $_POST['sitio'];
    $cuerpo = $_POST['cuerpo'];
    $agente_evento = $_POST['agente_evento'];
    $mecanismoevento = $_POST['mecanismoevento'];
    $tipolesion = $_POST['tipolesion'];
    $descripcion = $_POST['descripcion'];
    $accidente = $_POST['accidente'];
    $tipodocumento_inf = $_POST['tipodocumento_inf'];
    $identificacion_inf = $_POST['identificacion_inf'];
    $nombres_inf = $_POST['nombres_inf'];
    $cargo_inf = $_POST['cargo_inf'];
    $telefono_inf = $_POST['telefono_inf'];
    $correo_inf = $_POST['correo_inf'];
    
    $modeloSeguridad->add($nombretrabajador,$tipodocumento, $identificacion, $nacimiento, $sexo, $eps, 
                            $afp, $cargo, $fechaingreso, $ocupacion, $zona, $tipovinculacion, $departamento, 
                            $ciudad, $direccion, $centrotrabajo, $jornada, $fechaevento,$hh,$mm,$horaevento,
                            $jornadasucede,$tipoevento,$laborhabitual,$labor,
                            $causamuerte,$zonaevento,$departamentoevento,$municipio,$eventoempresa,
                            $sitio,$cuerpo,$agente_evento,$mecanismoevento,$tipolesion,$descripcion,$accidente,
                            $tipodocumento_inf,$identificacion_inf,$nombres_inf,$cargo_inf,$telefono_inf, $correo_inf);
    }else{
        header('Location: ../../index.php');
    }

?>