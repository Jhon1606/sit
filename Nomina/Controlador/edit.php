<?php

require_once('../Modelo/nomina.php');

if ($_POST) {
    $modeloNomina = new nomina();

    $id_nomina = $_POST['id_nomina'];
    $novedad_desde = $_POST['novedad_desde'];
    $novedad_hasta = $_POST['novedad_hasta'];
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $salario = $_POST['salario'];
    $fechaingreso = $_POST['fechaingreso'];
    $centrodecosto = $_POST['centrodecosto'];
    $cargo = $_POST['cargo'];
    $ordinario = $_POST['ordinario'];
    $transporte = $_POST['transporte'];
    $horasrecargo = $_POST['horasrecargo'];
    $domingocompensado = $_POST['domingocompensado'];
    $horasrecnocturno = $_POST['horasrecnocturno'];
    $horasextradiurno = $_POST['horasextradiurno'];
    $horasextranocturna = $_POST['horasextranocturna'];
    $horasordinarias = $_POST['horasordinarias'];
    $horasex_domingod = $_POST['horasex_domingod'];
    $horasrecdominical = $_POST['horasrecdominical'];
    $horasex_domingon = $_POST['horasex_domingon'];
    $bonificacion = $_POST['bonificacion'];
    $auxilio = $_POST['auxilio'];
    $comision = $_POST['comision'];
    $bonosalarial = $_POST['bonosalarial'];
    $incapacidad = $_POST['incapacidad'];
    $permisos = $_POST['permisos'];
    $otro_horas = $_POST['otro_horas'];
    $fecha_ausentismo = $_POST['fecha_ausentismo'];
    $casino = $_POST['casino'];
    $otro = $_POST['otro'];
    $observaciones = $_POST['observaciones'];

    $modeloNomina->update($id_nomina,$novedad_desde,$novedad_hasta,$cedula,$nombre,$salario,$fechaingreso,$centrodecosto,$cargo,$ordinario,$transporte,$horasrecargo,$domingocompensado,
                            $horasrecnocturno,$horasextradiurno,$horasextranocturna,$horasordinarias,$horasex_domingod,$horasrecdominical,$horasex_domingon,$bonificacion,
                            $auxilio,$comision,$bonosalarial,$incapacidad,$permisos,$otro_horas,$fecha_ausentismo,$casino,$otro, $observaciones);
    }else{
        header('Location: ../Vista/index.php');
    }

?>