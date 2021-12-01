<?php 

require_once('../../conexion.php');
require_once('../../General/Upload/upload.php');

class buzon extends conexion{

    public function __construct(){
        $this->conexion=parent::__construct();
    }   

    public function add($descripcion,$personasoli,$asunto,$archivo){
    $statement=$this->conexion->prepare("INSERT INTO buzon (descripcion, personasoli, asunto, archivo)
                                        VALUES(:descripcion, :personasoli, :asunto, :archivo)");
    
    $modeloUpload = new upload();
    $nombreArchivo = $modeloUpload->subirArchivo('Archivo'. $asunto, $archivo);

    $statement->bindParam(':descripcion',$descripcion);
    $statement->bindParam(':personasoli',$personasoli);
    $statement->bindParam(':asunto', $asunto);
    $statement->bindParam(':archivo', $nombreArchivo);

    if($statement->execute()){
        header('Location: ../Vista/index.php');
    }else{
        header('Location: ../Vista/add.php');
    }

    }
  
    public function get(){
        $rows=null;
        $statement=$this->conexion->prepare("SELECT * FROM buzon");
        $statement->execute();
        while($result=$statement->fetch()){
            $rows[]=$result;
        }
        return $rows;
    }

    public function getById($id_buzon){

        $rows=null;
        $statement=$this->conexion->prepare("SELECT * FROM buzon WHERE id_buzon = :id_buzon");
        $statement->bindParam(":id_buzon",$id_buzon);
        $statement->execute();
        while($result=$statement->fetch()){
            $rows[]=$result;
        }
        return $rows;
    }

    public function update($id_buzon,$descripcion,$respuesta,$fecharespuesta,$personasoli,$asunto, $archivo, $estado){
        $statement=$this->conexion->prepare("UPDATE buzon SET id_buzon=:id_buzon, descripcion=:descripcion, 
                                            respuesta=:respuesta, fecharespuesta=:fecharespuesta, personasoli=:personasoli, 
                                            asunto=:asunto, archivo=:archivo, estado=:estado WHERE id_buzon = :id_buzon");

         $statement->bindParam(':id_buzon',$id_buzon);
         $statement->bindParam(':descripcion',$descripcion);
         $statement->bindParam(':respuesta',$respuesta);
         $statement->bindParam(':fecharespuesta',$fecharespuesta);
         $statement->bindParam(':personasoli',$personasoli);
         $statement->bindParam(':asunto',$asunto);
         $statement->bindParam(':archivo',$archivo);
         $statement->bindParam(':estado',$estado);
         
         if($statement->execute()){
            header('Location: ../Vista/index.php');
         }else{
             header('Location: ../Vista/edit.php');
         }
    }

    public function delete($id_buzon){
        $statement=$this->conexion->prepare("DELETE FROM buzon WHERE id_buzon = :id_buzon");
        $statement->bindParam(":id_buzon", $id_buzon);
        if($statement->execute()){
            header('Location: ../Vista/index.php');
        }else{
            header('Location: ../Vista/delete.php');
        }
    }

    
}

?>