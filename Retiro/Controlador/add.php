<?php

require_once('../Modelo/retiro.php');

if ($_POST) {
    $modeloRetiro = new retiro();

    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $salario = $_POST['salario'];
    $centrodecosto = $_POST['centrodecosto'];
    $cargo = $_POST['cargo'];
    $fechanomina = $_POST['fechanomina'];
    $fecharetiro = $_POST['fecharetiro'];
    $cartaretiro = $_POST['cartaretiro'];
    $novedadesnomina = $_POST['novedadesnomina'];
    $pazysalvo = $_POST['pazysalvo'];
    $observaciones = $_POST['observaciones'];
    $ordinario = $_POST['ordinario'];
    $transporte = $_POST['transporte'];
    $horasrecargo = $_POST['horasrecargo'];
    $domingocompensado = $_POST['domingocompensado'];
    $horasdiurnas = $_POST['horasdiurnas'];
    $horasnocturnas = $_POST['horasnocturnas'];
    $horasdominicales = $_POST['horasdominicales'];
    $horasdomingo_d = $_POST['horasdomingo_d'];
    $horasdomingo_n = $_POST['horasdomingo_n'];
    $horasrec_dominical = $_POST['horasrec_dominical'];
    $bonificacion = $_POST['bonificacion'];
    $auxilio = $_POST['auxilio'];
    $comision = $_POST['comision'];
    $otro = $_POST['otro'];
    $incapacidad = $_POST['incapacidad'];
    $permisos = $_POST['permisos'];
    $otro_horas = $_POST['otro_horas'];
    $casino = $_POST['casino'];
    $otro_desc = $_POST['otro_desc'];
    $observaciones_reporte = $_POST['observaciones_reporte'];
    
    $modeloRetiro->add($cedula, $nombre, $salario, $centrodecosto, $cargo, $fechanomina, $fecharetiro, $cartaretiro, $novedadesnomina, 
                        $pazysalvo, $observaciones, $ordinario, $transporte, $horasrecargo, $domingocompensado, $horasdiurnas, $horasnocturnas, 
                        $horasdominicales, $horasdomingo_d, $horasdomingo_n, $horasrec_dominical, $bonificacion, $auxilio, $comision, $otro, $incapacidad, 
                        $permisos, $otro_horas, $casino, $otro_desc, $observaciones_reporte);
    }else{
        header('Location: ../../index.php');
    }

?>