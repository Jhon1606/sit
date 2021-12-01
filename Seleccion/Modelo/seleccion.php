<?php 

require_once('../../conexion.php');

class seleccion extends conexion{

    public function __construct(){
        $this->conexion=parent::__construct();
    }   

    public function add($cargo,$cantidad,$nivel,$salario,$comisiones,$motivo,$nombrelabor,$tiempo,$fechae,$horae,$fechal,$horal,
                            $sexo,$edadmin,$edadmax,$tiempolaboral,$tarjetapro,$otroidioma,$usoherramientas,$conduccion,$estudios,
                            $funciones,$departamento,$municipio,$direccion,$horario,$turnos,$ruta,$casino,$comentarios){
    $statement=$this->conexion->prepare("INSERT INTO requisiciones (cargo, cantidad, nivel, salario, comisiones, motivo, nombrelabor, tiempo, fechae, horae, fechal, horal, 
                                        sexo, edadmin, edadmax, tiempolaboral, tarjetapro, otroidioma, usoherramientas, conduccion,
                                        estudios, funciones, departamento, municipio, direccion, horario, turnos, ruta, casino, comentarios)
                                        VALUES(:cargo, :cantidad, :nivel, :salario, :comisiones, :motivo, :nombrelabor, :tiempo, :fechae, :horae, :fechal, :horal, :sexo, :edadmin, :edadmax,
                                        :tiempolaboral, :tarjetapro, :otroidioma, :usoherramientas, :conduccion, :estudios, :funciones, :departamento, :municipio,
                                        :direccion, :horario, :turnos, :ruta, :casino, :comentarios)");
    $statement->bindParam(':cargo',$cargo);
    $statement->bindParam(':cantidad',$cantidad);
    $statement->bindParam(':nivel',$nivel);
    $statement->bindParam(':salario',$salario);
    $statement->bindParam(':comisiones',$comisiones);
    $statement->bindParam(':motivo',$motivo);
    $statement->bindParam(':nombrelabor',$nombrelabor);
    $statement->bindParam(':tiempo',$tiempo);
    $statement->bindParam(':fechae',$fechae);
    $statement->bindParam(':horae',$horae);
    $statement->bindParam(':fechal',$fechal);
    $statement->bindParam(':horal',$horal);
    $statement->bindParam(':sexo', $sexo);
    $statement->bindParam(':edadmin', $edadmin);
    $statement->bindParam(':edadmax', $edadmax);
    $statement->bindParam(':tiempolaboral', $tiempolaboral);
    $statement->bindParam(':tarjetapro', $tarjetapro);
    $statement->bindParam(':otroidioma', $otroidioma);
    $statement->bindParam(':usoherramientas', $usoherramientas);
    $statement->bindParam(':conduccion', $conduccion);
    $statement->bindParam(':estudios', $estudios);
    $statement->bindParam(':funciones', $funciones);
    $statement->bindParam(':departamento', $departamento);
    $statement->bindParam(':municipio', $municipio);
    $statement->bindParam(':direccion', $direccion);
    $statement->bindParam(':horario', $horario);
    $statement->bindParam(':turnos', $turnos);
    $statement->bindParam(':ruta', $ruta);
    $statement->bindParam(':casino', $casino);
    $statement->bindParam(':comentarios', $comentarios);

    if($statement->execute()){
        header('Location: ../Vista/index.php');
    }else{
        header('Location: ../Vista/add.php');
    }

    }
  
    public function get(){
        $rows=null;
        $statement=$this->conexion->prepare("SELECT * FROM requisiciones");
        $statement->execute();
        while($result=$statement->fetch()){
            $rows[]=$result;
        }
        return $rows;
    }

    public function getById($id_requisicion){

        $rows=null;
        $statement=$this->conexion->prepare("SELECT * FROM requisiciones WHERE id_requisicion=:id_requisicion");
        $statement->bindParam(":id_requisicion",$id_requisicion);
        $statement->execute();
        while($result=$statement->fetch()){
            $rows[]=$result;
        }
        return $rows;
    }

    public function update($id_requisicion,$cargo,$cantidad,$nivel,$salario,$comisiones,$motivo,$nombrelabor,$tiempo,$fechae,$horae,$fechal,$horal,
                            $sexo,$edadmin,$edadmax,$tiempolaboral,$tarjetapro,$otroidioma,$usoherramientas,$conduccion,$estudios,
                            $funciones,$departamento,$municipio,$direccion,$horario,$turnos,$ruta,$casino,$comentarios){
        $statement=$this->conexion->prepare("UPDATE requisiciones SET cargo=:cargo, cantidad=:cantidad, 
                                            nivel=:nivel, salario=:salario, comisiones=:comisiones, motivo=:motivo, 
                                            sexo=:sexo, edadmin=:edadmin, edadmax=:edadmax, tiempolaboral=:tiempolaboral, tarjetapro=:tarjetapro, otroidioma=:otroidioma, 
                                            usoherramientas=:usoherramientas, conduccion=:conduccion, estudios=:estudios, funciones=:funciones, nombrelabor=:nombrelabor, tiempo=:tiempo, fechae=:fechae, horae=:horae, fechal=:fechal, horal=:horal,
                                            funciones=:funciones, departamento=:departamento, municipio=:municipio, direccion=:direccion, 
                                            horario=:horario, turnos=:turnos, ruta=:ruta, casino=:casino, comentarios=:comentarios WHERE id_requisicion = :id_requisicion");


         $statement->bindParam(':id_requisicion',$id_requisicion);
         $statement->bindParam(':cargo',$cargo);
         $statement->bindParam(':cantidad',$cantidad);
         $statement->bindParam(':nivel',$nivel);
         $statement->bindParam(':salario',$salario);
         $statement->bindParam(':comisiones',$comisiones);
         $statement->bindParam(':motivo',$motivo);
         $statement->bindParam(':nombrelabor',$nombrelabor);
         $statement->bindParam(':tiempo',$tiempo);
         $statement->bindParam(':fechae',$fechae);
         $statement->bindParam(':horae',$horae);
         $statement->bindParam(':fechal',$fechal);
         $statement->bindParam(':horal',$horal);
         $statement->bindParam(':sexo',$sexo);
         $statement->bindParam(':edadmin',$edadmin);
         $statement->bindParam(':edadmax',$edadmax);
         $statement->bindParam(':tiempolaboral',$tiempolaboral);
         $statement->bindParam(':tarjetapro',$tarjetapro);
         $statement->bindParam(':otroidioma',$otroidioma);
         $statement->bindParam(':usoherramientas',$usoherramientas);
         $statement->bindParam(':conduccion',$conduccion);
         $statement->bindParam(':estudios',$estudios);
         $statement->bindParam(':funciones',$funciones);
         $statement->bindParam(':departamento',$departamento);
         $statement->bindParam(':municipio',$municipio);
         $statement->bindParam(':direccion',$direccion);
         $statement->bindParam(':horario',$horario);
         $statement->bindParam(':turnos',$turnos);
         $statement->bindParam(':ruta',$ruta);
         $statement->bindParam(':casino',$casino);
         $statement->bindParam(':comentarios',$comentarios);
         
         if($statement->execute()){
            header('Location: ../Vista/index.php');
         }else{
             header('Location: ../Vista/edit.php');
         }
    }

    public function delete($id_requisicion){
        $statement=$this->conexion->prepare("DELETE FROM requisiciones WHERE id_requisicion = :id_requisicion");
        $statement->bindParam(":id_requisicion",$id_requisicion);
        if($statement->execute()){
            header('Location: ../Vista/index.php');
        }else{
            header('Location: ../Vista/delete.php');
        }
    }

    public function searchPrueba($search){

        $rows = null;
        $statement = $this->conexion->prepare("SELECT id_requisicion, fecha, cargo, cantidad
                                            FROM requisiciones WHERE POSITION(:search IN fecha) OR POSITION(:search IN cargo)
                                            OR POSITION(:search IN cantidad)");
        $statement->bindParam(':search',$search);
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        } return $rows;
    } 

    
}

?>