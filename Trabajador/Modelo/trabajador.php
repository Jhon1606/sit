<?php 

require_once('../../conexion.php');

class trabajador extends conexion{

    public function __construct(){
        $this->conexion=parent::__construct();
    }   

    public function add($nombretrabajadort,$tipodocumentot,$identificaciont,$nacimientot,$sexot,$epst,$afpt,$cargot, $fechaingresot, 
                        $ocupaciont, $salariot, $centrodecostot,$zonat,$tipovinculaciont, $departamentot, $ciudadt,$direcciont, $centrotrabajot, $jornadat){
        $statement=$this->conexion->prepare("INSERT INTO inf_seguridad (nombretrabajadort, tipodocumentot, identificaciont, nacimientot,
                                             sexot, epst, afpt, cargot, fechaingresot, ocupaciont, salariot, centrodecostot, zonat, 
                                            tipovinculaciont, departamentot, ciudadt,direcciont, centrotrabajot, jornadat)
                                            VALUES(:nombretrabajadort, :tipodocumentot, :identificaciont, :nacimientot, :sexot, 
                                            :epst, :afpt, :cargot, :fechaingresot, :ocupaciont, :salariot, :centrodecostot, :zonat, 
                                            :tipovinculaciont, :departamentot, :ciudadt, :direcciont, :centrotrabajot, :jornadat)");

        $statement->bindParam(':nombretrabajadort',$nombretrabajadort);
        $statement->bindParam(':tipodocumentot',$tipodocumentot);
        $statement->bindParam(':identificaciont',$identificaciont);
        $statement->bindParam(':nacimientot',$nacimientot);
        $statement->bindParam(':sexot', $sexot);
        $statement->bindParam(':epst', $epst);
        $statement->bindParam(':afpt', $afpt);
        $statement->bindParam(':cargot', $cargot);
        $statement->bindParam(':fechaingresot', $fechaingresot);
        $statement->bindParam(':ocupaciont', $ocupaciont);
        $statement->bindParam(':salariot', $salariot);
        $statement->bindParam(':centrodecostot', $centrodecostot);
        $statement->bindParam(':zonat', $zonat);
        $statement->bindParam(':tipovinculaciont', $tipovinculaciont);
        $statement->bindParam(':departamentot', $departamentot);
        $statement->bindParam(':ciudadt', $ciudadt);
        $statement->bindParam(':direcciont', $direcciont);
        $statement->bindParam(':centrotrabajot', $centrotrabajot);
        $statement->bindParam(':jornadat', $jornadat);

        if($statement->execute()){
        header('Location: ../Vista/index.php');
        }else{
        header('Location: ../Vista/add.php');
        }
    }

    public function update($id_infseguridad, $nombretrabajadort, $tipodocumentot, $identificaciont, $nacimientot, 
                            $sexot, $epst, $afpt, $cargot, $fechaingresot, $ocupaciont, $salariot, $centrodecostot, $zonat, $tipovinculaciont, 
                            $departamentot, $ciudadt, $direcciont, $centrotrabajot, $jornadat){
        $statement=$this->conexion->prepare("UPDATE inf_seguridad SET nombretrabajadort=:nombretrabajadort, tipodocumentot=:tipodocumentot, 
                    identificaciont=:identificaciont, nacimientot=:nacimientot, sexot=:sexot, epst=:epst, 
                    afpt=:afpt, cargot=:cargot, fechaingresot=:fechaingresot, ocupaciont=:ocupaciont, salariot=:salariot, centrodecostot=:centrodecostot, zonat=:zonat, 
                    tipovinculaciont=:tipovinculaciont, departamentot=:departamentot, ciudadt=:ciudadt, direcciont=:direcciont,
                    centrotrabajot=:centrotrabajot, jornadat=:jornadat WHERE id_infseguridad=:id_infseguridad");


        $statement->bindParam(':id_infseguridad', $id_infseguridad);
        $statement->bindParam(':nombretrabajadort', $nombretrabajadort);
        $statement->bindParam(':tipodocumentot', $tipodocumentot);
        $statement->bindParam(':identificaciont', $identificaciont);
        $statement->bindParam(':nacimientot', $nacimientot);
        $statement->bindParam(':sexot', $sexot);
        $statement->bindParam(':epst', $epst);
        $statement->bindParam(':afpt', $afpt);
        $statement->bindParam(':cargot', $cargot);
        $statement->bindParam(':fechaingresot', $fechaingresot);
        $statement->bindParam(':ocupaciont', $ocupaciont);
        $statement->bindParam(':salariot', $salariot);
        $statement->bindParam(':centrodecostot', $centrodecostot);
        $statement->bindParam(':zonat', $zonat);
        $statement->bindParam(':tipovinculaciont', $tipovinculaciont);
        $statement->bindParam(':departamentot', $departamentot);
        $statement->bindParam(':ciudadt', $ciudadt);
        $statement->bindParam(':direcciont', $direcciont);
        $statement->bindParam(':centrotrabajot', $centrotrabajot);
        $statement->bindParam(':jornadat', $jornadat);

        if($statement->execute()){
        header('Location: ../Vista/index.php');
        }else{
        header('Location: ../Vista/edit.php');
        }
    }

    public function cargarTrabajador($identificaciont)
    {
        $rows = null;
        $statement = $this->conexion->prepare("SELECT * FROM inf_seguridad WHERE identificaciont = :identificaciont");
        $statement->bindParam(":identificaciont", $identificaciont);
        $statement->execute();

        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }

        return $rows;
    }

    public function get(){
        $rows=null;
        $statement=$this->conexion->prepare("SELECT * FROM inf_seguridad");
        $statement->execute();
        while($result=$statement->fetch()){
            $rows[]=$result;
        }
        return $rows;
    }

    public function getById($id_infseguridad){

        $rows=null;
        $statement=$this->conexion->prepare("SELECT * FROM inf_seguridad WHERE id_infseguridad = :id_infseguridad");
        $statement->bindParam(":id_infseguridad",$id_infseguridad);
        $statement->execute();
        while($result=$statement->fetch()){
            $rows[]=$result;
        }
        return $rows;
    }

    public function delete($id_infseguridad){
        $statement=$this->conexion->prepare("DELETE FROM inf_seguridad WHERE id_infseguridad = :id_infseguridad");
        $statement->bindParam(":id_infseguridad", $id_infseguridad);
        if($statement->execute()){
            header('Location: ../Vista/index.php');
        }else{
            header('Location: ../Vista/delete.php');
        }
    } 
}
?>