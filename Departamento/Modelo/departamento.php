<?php 

require_once('../../conexion.php');

class departamento extends conexion{

    public function __construct(){
        $this->conexion = parent::__construct();
    }   

    public function get()
    {
        $rows = null;
        $statement = $this->conexion->prepare("SELECT * FROM departamentos ORDER BY departamento");
        $statement->execute();

        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }

        return $rows;
    }
}

?>