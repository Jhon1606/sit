<?php 

require_once('../../conexion.php');

class talento extends conexion{

    public function __construct(){
        $this->conexion=parent::__construct();
    }   

    public function add($turno,$hora, $fecha,$ciudad,$proyecto,$nombretrabajador,$nombresuperior,$motivo,$comentarios,
                        $archivouno,$archivo_uno,$archivodos,$archivo_dos,$archivotres,$archivo_tres,$archivocuatro,$archivo_cuatro){
        $statement=$this->conexion->prepare("INSERT INTO talento (turno, hora, fecha, ciudad, proyecto,
                                            nombretrabajador, nombresuperior, motivo, comentarios, 
                                            archivouno,archivo_uno,archivodos,archivo_dos,archivotres,
                                            archivo_tres,archivocuatro,archivo_cuatro)
                                            VALUES(:turno, :hora, :fecha, :ciudad, :proyecto, :nombretrabajador, 
                                            :nombresuperior, :motivo, :comentarios, :archivouno,:archivo_uno,:archivodos,:archivo_dos,:archivotres,
                                            :archivo_tres,:archivocuatro,:archivo_cuatro)");

        $statement->bindParam(':turno',$turno);
        $statement->bindParam(':hora',$hora);
        $statement->bindParam(':fecha',$fecha);
        $statement->bindParam(':ciudad',$ciudad);
        $statement->bindParam(':proyecto',$proyecto);
        $statement->bindParam(':nombretrabajador', $nombretrabajador);
        $statement->bindParam(':nombresuperior', $nombresuperior);
        $statement->bindParam(':motivo', $motivo);
        $statement->bindParam(':comentarios', $comentarios);
        $statement->bindParam(':archivouno', $archivouno);
        $statement->bindParam(':archivo_uno', $archivo_uno);
        $statement->bindParam(':archivodos', $archivodos);
        $statement->bindParam(':archivo_dos', $archivo_dos);
        $statement->bindParam(':archivotres', $archivotres);
        $statement->bindParam(':archivo_tres', $archivo_tres);
        $statement->bindParam(':archivocuatro', $archivocuatro);
        $statement->bindParam(':archivo_cuatro', $archivo_cuatro);

        if($statement->execute()){
        header('Location: ../Vista/index.php');
        }else{
        header('Location: ../Vista/add.php');
        }
    }

    public function update($id_talento, $turno, $hora, $fecha, $ciudad, $proyecto, 
                            $nombretrabajador, $nombresuperior, $motivo, $comentarios, 
                            $archivouno,$archivo_uno,$archivodos,$archivo_dos,$archivotres,
                            $archivo_tres,$archivocuatro,$archivo_cuatro){
        $statement=$this->conexion->prepare("UPDATE talento SET turno=:turno, hora=:hora, fecha=:fecha,
                    ciudad=:ciudad, proyecto=:proyecto, nombretrabajador=:nombretrabajador, nombresuperior=:nombresuperior, 
                    motivo=:motivo, comentarios=:comentarios, archivouno=:archivouno, archivo_uno=:archivo_uno,
                    archivodos=:archivosdos, archivo_dos=:archivo_dos, archivotres=:archivotres, archivo_tres=:archivo_tres, 
                    archivocuatro=:archivocuatro ,archivo_cuatro=:archivo_cuatro WHERE id_talento=:id_talento");


        $statement->bindParam(':id_talento', $id_talento);
        $statement->bindParam(':turno', $turno);
        $statement->bindParam(':hora', $hora);
        $statement->bindParam(':fecha', $fecha);
        $statement->bindParam(':ciudad', $ciudad);
        $statement->bindParam(':proyecto', $proyecto);
        $statement->bindParam(':nombretrabajador', $nombretrabajador);
        $statement->bindParam(':nombresuperior', $nombresuperior);
        $statement->bindParam(':motivo', $motivo);
        $statement->bindParam(':comentarios', $comentarios);
        $statement->bindParam(':archivouno', $archivouno);
        $statement->bindParam(':archivo_uno', $archivo_uno);
        $statement->bindParam(':archivodos', $archivodos);
        $statement->bindParam(':archivo_dos', $archivo_dos);
        $statement->bindParam(':archivotres', $archivotres);
        $statement->bindParam(':archivo_tres', $archivo_tres);
        $statement->bindParam(':archivocuatro', $archivocuatro);
        $statement->bindParam(':archivo_cuatro', $archivo_cuatro);


        if($statement->execute()){
        header('Location: ../Vista/index.php');
        }else{
        header('Location: ../Vista/edit.php');
        }
    }

    public function get(){
        $rows=null;
        $statement=$this->conexion->prepare("SELECT * FROM talento");
        $statement->execute();
        while($result=$statement->fetch()){
            $rows[]=$result;
        }
        return $rows;
    }

    public function getById($id_talento){

        $rows=null;
        $statement=$this->conexion->prepare("SELECT * FROM talento WHERE id_talento = :id_talento");
        $statement->bindParam(":id_talento",$id_talento);
        $statement->execute();
        while($result=$statement->fetch()){
            $rows[]=$result;
        }
        return $rows;
    }

    public function delete($id_talento){
        $statement=$this->conexion->prepare("DELETE FROM talento WHERE id_talento = :id_talento");
        $statement->bindParam(":id_talento", $id_talento);
        if($statement->execute()){
            header('Location: ../Vista/index.php');
        }else{
            header('Location: ../Vista/delete.php');
        }
    } 
}
?>