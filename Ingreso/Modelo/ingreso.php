<?php 

require_once('../../conexion.php');

class ingreso extends conexion{

    public function __construct(){
        $this->conexion=parent::__construct();
    }   

    public function add($cedula,$nombre,$cargo,$asignacion,$fechai,$nomina,$ciudad,$centrocosto,$nivelriesgo,$procesoseleccion,$motivo,$nombrelabor,
                            $tiempo,$telseleccion,$comentarios){
        $statement=$this->conexion->prepare("INSERT INTO ingreso (cedula, nombre, cargo, asignacion, fechai, nomina, ciudad, centrocosto, nivelriesgo, procesoseleccion, motivo, nombrelabor, 
                                            tiempo, telseleccion, comentarios)
                                            VALUES(:cedula, :nombre, :cargo, :asignacion, :fechai, :nomina, :ciudad, :centrocosto, :nivelriesgo, 
                                            :procesoseleccion, :motivo, :nombrelabor, :tiempo, :telseleccion, :comentarios)");
        $statement->bindParam(':cedula',$cedula);
        $statement->bindParam(':nombre',$nombre);
        $statement->bindParam(':cargo',$cargo);
        $statement->bindParam(':asignacion',$asignacion);
        $statement->bindParam(':fechai', $fechai);
        $statement->bindParam(':nomina', $nomina);
        $statement->bindParam(':ciudad', $ciudad);
        $statement->bindParam(':centrocosto', $centrocosto);
        $statement->bindParam(':nivelriesgo', $nivelriesgo);
        $statement->bindParam(':procesoseleccion', $procesoseleccion);
        $statement->bindParam(':motivo', $motivo);
        $statement->bindParam(':nombrelabor', $nombrelabor);
        $statement->bindParam(':tiempo', $tiempo);
        $statement->bindParam(':telseleccion', $telseleccion);
        $statement->bindParam(':comentarios', $comentarios);

        if($statement->execute()){
            header('Location: ../Vista/index.php');
        }else{
            header('Location: ../Vista/add.php');
        }

    }
  
    public function get(){
        $rows=null;
        $statement=$this->conexion->prepare("SELECT * FROM ingreso");
        $statement->execute();
        while($result=$statement->fetch()){
            $rows[]=$result;
        }
        return $rows;
    }

    public function getById($id_ingreso){

        $rows=null;
        $statement=$this->conexion->prepare("SELECT * FROM ingreso WHERE id_ingreso = :id_ingreso");
        $statement->bindParam(":id_ingreso",$id_ingreso);
        $statement->execute();
        while($result=$statement->fetch()){
            $rows[]=$result;
        }
        return $rows;
    }

    public function update($id_ingreso, $cedula,$nombre,$cargo,$asignacion,$fechai,$nomina,$ciudad,$centrocosto,$nivelriesgo,$procesoseleccion,$motivo,$nombrelabor,
                            $tiempo,$telseleccion,$comentarios){
        $statement=$this->conexion->prepare("UPDATE ingreso SET id_ingreso=:id_ingreso, cedula=:cedula, 
                                            nombre=:nombre, cargo=:cargo, asignacion=:asignacion, fechai=:fechai, 
                                            nomina=:nomina, ciudad=:ciudad, centrocosto=:centrocosto, nivelriesgo=:nivelriesgo, procesoseleccion=:procesoseleccion, motivo=:motivo, 
                                            nombrelabor=:nombrelabor, tiempo=:tiempo, telseleccion=:telseleccion, comentarios=:comentarios WHERE id_ingreso = :id_ingreso");


         $statement->bindParam(':id_ingreso',$id_ingreso);
         $statement->bindParam(':cedula',$cedula);
         $statement->bindParam(':nombre',$nombre);
         $statement->bindParam(':cargo',$cargo);
         $statement->bindParam(':asignacion',$asignacion);
         $statement->bindParam(':fechai',$fechai);
         $statement->bindParam(':nomina',$nomina);
         $statement->bindParam(':ciudad',$ciudad);
         $statement->bindParam(':centrocosto',$centrocosto);
         $statement->bindParam(':nivelriesgo',$nivelriesgo);
         $statement->bindParam(':procesoseleccion',$procesoseleccion);
         $statement->bindParam(':motivo',$motivo);
         $statement->bindParam(':nombrelabor',$nombrelabor);
         $statement->bindParam(':tiempo', $tiempo);
         $statement->bindParam(':telseleccion', $telseleccion);
         $statement->bindParam(':comentarios', $comentarios);
         
         if($statement->execute()){
            header('Location: ../Vista/index.php');
         }else{
             header('Location: ../Vista/edit.php');
         }
    }

    public function delete($id_ingreso){
        $statement=$this->conexion->prepare("DELETE FROM ingreso WHERE id_ingreso = :id_ingreso");
        $statement->bindParam(":id_ingreso", $id_ingreso);
        if($statement->execute()){
            header('Location: ../Vista/index.php');
        }else{
            header('Location: ../Vista/delete.php');
        }
    }    
}

?>