<?php 

require_once('../../conexion.php');

class nomina extends conexion{

    public function __construct(){
        $this->conexion=parent::__construct();
    }   

    public function add($novedad_desde,$novedad_hasta,$cedula,$nombre,$salario,$fechaingreso,$centrodecosto,$cargo,$ordinario,$transporte,$horasrecargo,$domingocompensado,
                            $horasrecnocturno,$horasextradiurno,$horasextranocturna,$horasordinarias,$horasex_domingod,$horasrecdominical,$horasex_domingon,$bonificacion,
                            $auxilio,$comision,$bonosalarial,$incapacidad,$permisos,$otro_horas,$fecha_ausentismo,$casino,$otro, $observaciones){
    $statement=$this->conexion->prepare("INSERT INTO nomina (novedad_desde, novedad_hasta, cedula, nombre, salario, fechaingreso, centrodecosto, cargo, ordinario,
                                        transporte, horasrecargo, domingocompensado, horasrecnocturno, horasextradiurno, horasextranocturna, horasordinarias, horasex_domingod, horasrecdominical, horasex_domingon,
                                        bonificacion, auxilio, comision, bonosalarial, incapacidad, permisos, otro_horas, fecha_ausentismo, casino, otro, observaciones)
                                        VALUES(:novedad_desde, :novedad_hasta, :cedula, :nombre, :salario, :fechaingreso, :centrodecosto, :cargo, :ordinario, :transporte, :horasrecargo, :domingocompensado, :horasrecnocturno, :horasextradiurno, :horasextranocturna,
                                        :horasordinarias, :horasex_domingod, :horasrecdominical, :horasex_domingon, :bonificacion, :auxilio, :comision, :bonosalarial,
                                        :incapacidad, :permisos, :otro_horas, :fecha_ausentismo, :casino, :otro, :observaciones)");
    $statement->bindParam(':novedad_desde',$novedad_desde);
    $statement->bindParam(':novedad_hasta',$novedad_hasta);
    $statement->bindParam(':cedula',$cedula);
    $statement->bindParam(':nombre',$nombre);
    $statement->bindParam(':salario',$salario);
    $statement->bindParam(':fechaingreso',$fechaingreso);
    $statement->bindParam(':centrodecosto',$centrodecosto);
    $statement->bindParam(':cargo',$cargo);
    $statement->bindParam(':ordinario',$ordinario);
    $statement->bindParam(':transporte',$transporte);
    $statement->bindParam(':horasrecargo',$horasrecargo);
    $statement->bindParam(':domingocompensado',$domingocompensado);
    $statement->bindParam(':horasrecnocturno', $horasrecnocturno);
    $statement->bindParam(':horasextradiurno', $horasextradiurno);
    $statement->bindParam(':horasextranocturna', $horasextranocturna);
    $statement->bindParam(':horasordinarias', $horasordinarias);
    $statement->bindParam(':horasex_domingod', $horasex_domingod);
    $statement->bindParam(':horasrecdominical', $horasrecdominical);
    $statement->bindParam(':horasex_domingon', $horasex_domingon);
    $statement->bindParam(':bonificacion', $bonificacion);
    $statement->bindParam(':auxilio', $auxilio);
    $statement->bindParam(':comision', $comision);
    $statement->bindParam(':bonosalarial', $bonosalarial);
    $statement->bindParam(':incapacidad', $incapacidad);
    $statement->bindParam(':permisos', $permisos);
    $statement->bindParam(':otro_horas', $otro_horas);
    $statement->bindParam(':fecha_ausentismo', $fecha_ausentismo);
    $statement->bindParam(':casino', $casino);
    $statement->bindParam(':otro', $otro);
    $statement->bindParam(':observaciones', $observaciones);

    if($statement->execute()){
        header('Location: ../Vista/index.php');
    }else{
        header('Location: ../Vista/add.php');
    }

    }
  
    public function get(){
        $rows=null;
        $statement=$this->conexion->prepare("SELECT * FROM nomina");
        $statement->execute();
        while($result=$statement->fetch()){
            $rows[]=$result;
        }
        return $rows;
    }

    public function getById($id_nomina){

        $rows=null;
        $statement=$this->conexion->prepare("SELECT * FROM nomina WHERE id_nomina=:id_nomina");
        $statement->bindParam(":id_nomina",$id_nomina);
        $statement->execute();
        while($result=$statement->fetch()){
            $rows[]=$result;
        }
        return $rows;
    }

    public function update($id_nomina,$novedad_desde,$novedad_hasta,$cedula,$nombre,$salario,$fechaingreso,$centrodecosto,$cargo,$ordinario,$transporte,$horasrecargo,$domingocompensado,
                            $horasrecnocturno,$horasextradiurno,$horasextranocturna,$horasordinarias,$horasex_domingod,$horasrecdominical,$horasex_domingon,$bonificacion,
                            $auxilio,$comision,$bonosalarial,$incapacidad,$permisos,$otro_horas,$fecha_ausentismo,$casino,$otro, $observaciones){
        $statement=$this->conexion->prepare("UPDATE nomina SET novedad_desde=:novedad_desde, novedad_hasta=:novedad_hasta, 
                                            cedula=:cedula, nombre=:nombre, salario=:salario, fechaingreso=:fechaingreso, 
                                            centrodecosto=:centrodecosto,  ordinario=:ordinario,
                                            transporte=:transporte, horasrecargo=:horasrecargo, domingocompensado=:domingocompensado,
                                            horasrecnocturno=:horasrecnocturno, horasextradiurno=:horasextradiurno, horasextranocturna=:horasextranocturna, 
                                            horasordinarias=:horasordinarias, horasex_domingod=:horasex_domingod, horasrecdominical=:horasrecdominical, 
                                            horasex_domingon=:horasex_domingon, bonificacion=:bonificacion, auxilio=:auxilio, comision=:comision, bonosalarial=:bonosalarial,
                                            incapacidad=:incapacidad, permisos=:permisos, otro_horas=:otro_horas, 
                                            fecha_ausentismo=:fecha_ausentismo, casino=:casino, otro=:otro, casino=:casino, observaciones=:observaciones WHERE id_nomina = :id_nomina");

         $statement->bindParam(':id_nomina',$id_nomina);
         $statement->bindParam(':novedad_desde',$novedad_desde);
         $statement->bindParam(':novedad_hasta',$novedad_hasta);
         $statement->bindParam(':cedula',$cedula);
         $statement->bindParam(':nombre',$nombre);
         $statement->bindParam(':salario',$salario);
         $statement->bindParam(':fechaingreso',$fechaingreso);
         $statement->bindParam(':centrodecosto',$centrodecosto);
         $statement->bindParam(':cargo',$cargo);
         $statement->bindParam(':ordinario',$ordinario);
         $statement->bindParam(':transporte',$transporte);
         $statement->bindParam(':horasrecargo',$horasrecargo);
         $statement->bindParam(':domingocompensado',$domingocompensado);
         $statement->bindParam(':horasrecnocturno',$horasrecnocturno);
         $statement->bindParam(':horasextradiurno',$horasextradiurno);
         $statement->bindParam(':horasextranocturna',$horasextranocturna);
         $statement->bindParam(':horasordinarias',$horasordinarias);
         $statement->bindParam(':horasex_domingod',$horasex_domingod);
         $statement->bindParam(':horasrecdominical',$horasrecdominical);
         $statement->bindParam(':horasex_domingon',$horasex_domingon);
         $statement->bindParam(':bonificacion',$bonificacion);
         $statement->bindParam(':auxilio',$auxilio);
         $statement->bindParam(':comision',$comision);
         $statement->bindParam(':bonosalarial',$bonosalarial);
         $statement->bindParam(':incapacidad',$incapacidad);
         $statement->bindParam(':permisos',$permisos);
         $statement->bindParam(':otro_horas',$otro_horas);
         $statement->bindParam(':fecha_ausentismo',$fecha_ausentismo);
         $statement->bindParam(':casino',$casino);
         $statement->bindParam(':otro',$otro);
         $statement->bindParam(':observaciones',$observaciones);
         
         if($statement->execute()){
            header('Location: ../Vista/index.php');
         }else{
             header('Location: ../Vista/edit.php');
         }
    }

    public function delete($id_nomina){
        $statement=$this->conexion->prepare("DELETE FROM nomina WHERE id_nomina = :id_nomina");
        $statement->bindParam(":id_nomina",$id_nomina);
        if($statement->execute()){
            header('Location: ../Vista/index.php');
        }else{
            header('Location: ../Vista/delete.php');
        }
    }

    
}

?>