<?php 

require_once('../../conexion.php');

class retiro extends conexion{

    public function __construct(){
        $this->conexion=parent::__construct();
    }   

    public function add($cedula, $nombre, $salario, $centrodecosto, $cargo, $fechanomina, $fecharetiro, $cartaretiro, $novedadesnomina, 
                            $pazysalvo, $observaciones, $ordinario, $transporte, $horasrecargo, $domingocompensado, $horasdiurnas, $horasnocturnas, 
                            $horasdominicales, $horasdomingo_d, $horasdomingo_n, $horasrec_dominical, $bonificacion, $auxilio, $comision, $otro, $incapacidad, 
                            $permisos, $otro_horas, $casino, $otro_desc, $observaciones_reporte){
        $statement=$this->conexion->prepare("INSERT INTO retiro (cedula, nombre, salario,  centrodecosto, cargo, fechanomina,
                                            fecharetiro, cartaretiro, novedadesnomina, pazysalvo, observaciones, ordinario, transporte, horasrecargo, domingocompensado, horasdiurnas,
                                            horasnocturnas, horasdominicales, horasdomingo_d, horasdomingo_n, horasrec_dominical, bonificacion, auxilio, comision, otro, incapacidad,
                                            permisos, otro_horas, casino, otro_desc, observaciones_reporte)
                                            VALUES(:cedula, :nombre, :salario,  :centrodecosto, :cargo, :fechanomina, :fecharetiro, :cartaretiro, :novedadesnomina, :pazysalvo, :observaciones, :ordinario,
                                            :transporte, :horasrecargo, :domingocompensado, :horasdiurnas, :horasnocturnas, :horasdominicales, :horasdomingo_d, :horasdomingo_n,
                                            :horasrec_dominical, :bonificacion, :auxilio, :comision, :otro, :incapacidad, :permisos, :otro_horas, :casino, :otro_desc, :observaciones_reporte)");
                                

        $statement->bindParam(':cedula',$cedula);
        $statement->bindParam(':nombre',$nombre);
        $statement->bindParam(':salario',$salario);
        $statement->bindParam(':centrodecosto',$centrodecosto);
        $statement->bindParam(':cargo',$cargo);
        $statement->bindParam(':fechanomina',$fechanomina);
        $statement->bindParam(':fecharetiro',$fecharetiro);
        $statement->bindParam(':cartaretiro',$cartaretiro);
        $statement->bindParam(':novedadesnomina',$novedadesnomina);
        $statement->bindParam(':pazysalvo', $pazysalvo);
        $statement->bindParam(':observaciones', $observaciones);
        $statement->bindParam(':ordinario', $ordinario);
        $statement->bindParam(':transporte', $transporte);
        $statement->bindParam(':horasrecargo', $horasrecargo);
        $statement->bindParam(':domingocompensado', $domingocompensado);
        $statement->bindParam(':horasdiurnas', $horasdiurnas);
        $statement->bindParam(':horasnocturnas', $horasnocturnas);
        $statement->bindParam(':horasdominicales', $horasdominicales);
        $statement->bindParam(':horasdomingo_d', $horasdomingo_d);
        $statement->bindParam(':horasdomingo_n', $horasdomingo_n);
        $statement->bindParam(':horasrec_dominical', $horasrec_dominical);
        $statement->bindParam(':bonificacion', $bonificacion);
        $statement->bindParam(':auxilio', $auxilio);
        $statement->bindParam(':comision', $comision);
        $statement->bindParam(':otro', $otro);
        $statement->bindParam(':incapacidad', $incapacidad);
        $statement->bindParam(':permisos', $permisos);
        $statement->bindParam(':otro_horas', $otro_horas);
        $statement->bindParam(':casino', $casino);
        $statement->bindParam(':otro_desc', $otro_desc);
        $statement->bindParam(':observaciones_reporte', $observaciones_reporte);

        if($statement->execute()){
            header('Location: ../Vista/index.php');
        }else{
            header('Location: ../Vista/add.php');
        }

    }
  
    public function get(){
        $rows=null;
        $statement=$this->conexion->prepare("SELECT * FROM retiro");
        $statement->execute();
        while($result=$statement->fetch()){
            $rows[]=$result;
        }
        return $rows;
    }

    public function getById($id_retiro){

        $rows=null;
        $statement=$this->conexion->prepare("SELECT * FROM retiro WHERE id_retiro = :id_retiro");
        $statement->bindParam(":id_retiro",$id_retiro);
        $statement->execute();
        while($result=$statement->fetch()){
            $rows[]=$result;
        }
        return $rows;
    }

    public function update($id_retiro, $cedula, $nombre, $salario, $centrodecosto, $cargo, $fechanomina, $fecharetiro, $cartaretiro, $novedadesnomina, 
                            $pazysalvo, $observaciones, $ordinario, $transporte, $horasrecargo, $domingocompensado, $horasdiurnas, $horasnocturnas, 
                            $horasdominicales, $horasdomingo_d, $horasdomingo_n, $horasrec_dominical, $bonificacion, $auxilio, $comision, $otro, $incapacidad, 
                            $permisos, $otro_horas, $casino, $otro_desc, $observaciones_reporte){
        $statement=$this->conexion->prepare("UPDATE retiro SET cedula=:cedula, nombre=:nombre, salario=:salario, centrodecosto=:centrodecosto, 
                                            cargo=:cargo, fechanomina=:fechanomina, fecharetiro=:fecharetiro, cartaretiro=:cartaretiro,
                                            novedadesnomina=:novedadesnomina, pazysalvo=:pazysalvo, observaciones=:observaciones, ordinario=:ordinario, 
                                            transporte=:transporte, horasrecargo=:horasrecargo, domingocompensado=:domingocompensado, 
                                            horasdiurnas=:horasdiurnas, horasnocturnas=:horasnocturnas, horasdominicales=:horasdominicales, 
                                            horasdomingo_d=:horasdomingo_d, horasdomingo_n=:horasdomingo_n, horasrec_dominical=:horasrec_dominical, 
                                            bonificacion=:bonificacion, auxilio=:auxilio, comision=:comision, otro=:otro, incapacidad=:incapacidad,
                                            permisos=:permisos, otro_horas=:otro_horas, casino=:casino, otro_desc=:otro_desc, 
                                            observaciones_reporte=:observaciones_reporte WHERE id_retiro = :id_retiro");

        $statement->bindParam(':id_retiro',$id_retiro);
        $statement->bindParam(':cedula',$cedula);
        $statement->bindParam(':nombre',$nombre);
        $statement->bindParam(':salario',$salario);
        $statement->bindParam(':centrodecosto',$centrodecosto);
        $statement->bindParam(':cargo',$cargo);
        $statement->bindParam(':fechanomina',$fechanomina);
        $statement->bindParam(':fecharetiro',$fecharetiro);
        $statement->bindParam(':cartaretiro',$cartaretiro);
        $statement->bindParam(':novedadesnomina',$novedadesnomina);
        $statement->bindParam(':pazysalvo', $pazysalvo);
        $statement->bindParam(':observaciones', $observaciones);
        $statement->bindParam(':ordinario', $ordinario);
        $statement->bindParam(':transporte', $transporte);
        $statement->bindParam(':horasrecargo', $horasrecargo);
        $statement->bindParam(':domingocompensado', $domingocompensado);
        $statement->bindParam(':horasdiurnas', $horasdiurnas);
        $statement->bindParam(':horasnocturnas', $horasnocturnas);
        $statement->bindParam(':horasdominicales', $horasdominicales);
        $statement->bindParam(':horasdomingo_d', $horasdomingo_d);
        $statement->bindParam(':horasdomingo_n', $horasdomingo_n);
        $statement->bindParam(':horasrec_dominical', $horasrec_dominical);
        $statement->bindParam(':bonificacion', $bonificacion);
        $statement->bindParam(':auxilio', $auxilio);
        $statement->bindParam(':comision', $comision);
        $statement->bindParam(':otro', $otro);
        $statement->bindParam(':incapacidad', $incapacidad);
        $statement->bindParam(':permisos', $permisos);
        $statement->bindParam(':otro_horas', $otro_horas);
        $statement->bindParam(':casino', $casino);
        $statement->bindParam(':otro_desc', $otro_desc);
        $statement->bindParam(':observaciones_reporte', $observaciones_reporte);
         
        if($statement->execute()){
            header('Location: ../Vista/index.php');
        }else{
            header('Location: ../Vista/edit.php');
        }
    }

    public function delete($id_retiro){
        $statement=$this->conexion->prepare("DELETE FROM retiro WHERE id_retiro = :id_retiro");
        $statement->bindParam(":id_retiro",$id_retiro);
        if($statement->execute()){
            header('Location: ../Vista/index.php');
        }else{
            header('Location: ../Vista/delete.php');
        }
    }

    
}

?>