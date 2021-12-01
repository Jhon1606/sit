<?php 

require_once('../../conexion.php');

class municipio extends conexion{

    public function __construct(){
        $this->conexion=parent::__construct();
    }   

    public function verMunicipiosPorDepartamento($id)
    {
        $rows = null;
        $statement = $this->conexion->prepare("SELECT * FROM municipios WHERE departamento =:id ORDER BY municipio");
        $statement->bindParam(":id", $id);
        $statement->execute();

        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }

        return $rows;
    }
}
?>