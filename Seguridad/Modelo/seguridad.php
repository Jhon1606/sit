<?php 

require_once('../../conexion.php');

class seguridad extends conexion{

    public function __construct(){
        $this->conexion=parent::__construct();
    }   

    public function add($nombretrabajador,$tipodocumento, $identificacion, $nacimiento, $sexo, $eps, 
                        $afp, $cargo, $fechaingreso, $ocupacion, $zona, $tipovinculacion, $departamento, 
                        $ciudad, $direccion, $centrotrabajo, $jornada, $fechaevento,$hh,$mm,$horaevento,
                        $jornadasucede,$tipoevento,$laborhabitual,$labor,
                        $causamuerte,$zonaevento,$departamentoevento,$municipio,$eventoempresa,
                        $sitio,$cuerpo,$agente_evento,$mecanismoevento,$tipolesion,$descripcion,$accidente,
                        $tipodocumento_inf,$identificacion_inf,$nombres_inf,$cargo_inf,$telefono_inf, $correo_inf){
        $statement=$this->conexion->prepare("INSERT INTO seguridad (nombretrabajador,tipodocumento, identificacion, nacimiento, sexo, eps, 
                                            afp, cargo, fechaingreso, ocupacion, zona, tipovinculacion, departamento, 
                                            ciudad, direccion, centrotrabajo, jornada,fechaevento, hh, mm, horaevento, jornadasucede, tipoevento, laborhabitual, labor, causamuerte, zonaevento, 
                                            departamentoevento, municipio, eventoempresa, sitio, cuerpo, agente_evento,
                                            mecanismoevento, tipolesion, descripcion, accidente, tipodocumento_inf, identificacion_inf, nombres_inf, cargo_inf, telefono_inf, correo_inf)
                                            VALUES(:nombretrabajador, :tipodocumento, :identificacion, :nacimiento, :sexo, :eps, 
                                            :afp, :cargo, :fechaingreso, :ocupacion, :zona, :tipovinculacion, :departamento, 
                                            :ciudad, :direccion, :centrotrabajo, :jornada, :fechaevento, :hh, :mm, :horaevento, :jornadasucede, :tipoevento, :laborhabitual, :labor, :causamuerte, :zonaevento, :departamentoevento, :municipio,
                                            :eventoempresa, :sitio, :cuerpo, :agente_evento, :mecanismoevento, :tipolesion, :descripcion, :accidente,
                                            :tipodocumento_inf, :identificacion_inf, :nombres_inf, :cargo_inf, :telefono_inf, :correo_inf)");
        $statement->bindParam(':nombretrabajador',$nombretrabajador);
        $statement->bindParam(':tipodocumento',$tipodocumento);
        $statement->bindParam(':identificacion',$identificacion);
        $statement->bindParam(':nacimiento',$nacimiento);
        $statement->bindParam(':sexo',$sexo);
        $statement->bindParam(':eps',$eps);
        $statement->bindParam(':afp',$afp);
        $statement->bindParam(':cargo',$cargo);
        $statement->bindParam(':fechaingreso',$fechaingreso);
        $statement->bindParam(':ocupacion',$ocupacion);
        $statement->bindParam(':zona',$zona);
        $statement->bindParam(':tipovinculacion',$tipovinculacion);
        $statement->bindParam(':departamento',$departamento);
        $statement->bindParam(':ciudad',$ciudad);
        $statement->bindParam(':direccion',$direccion);
        $statement->bindParam(':centrotrabajo',$centrotrabajo);
        $statement->bindParam(':jornada',$jornada);
        $statement->bindParam(':fechaevento',$fechaevento);
        $statement->bindParam(':hh',$hh);
        $statement->bindParam(':mm',$mm);
        $statement->bindParam(':horaevento',$horaevento);
        $statement->bindParam(':jornadasucede',$jornadasucede);
        $statement->bindParam(':tipoevento',$tipoevento);
        $statement->bindParam(':laborhabitual',$laborhabitual);
        $statement->bindParam(':labor',$labor);
        $statement->bindParam(':causamuerte',$causamuerte);
        $statement->bindParam(':zonaevento',$zonaevento);
        $statement->bindParam(':departamentoevento', $departamentoevento);
        $statement->bindParam(':municipio', $municipio);
        $statement->bindParam(':eventoempresa', $eventoempresa);
        $statement->bindParam(':sitio', $sitio);
        $statement->bindParam(':cuerpo', $cuerpo);
        $statement->bindParam(':agente_evento', $agente_evento);
        $statement->bindParam(':mecanismoevento', $mecanismoevento);
        $statement->bindParam(':tipolesion', $tipolesion);
        $statement->bindParam(':descripcion', $descripcion);
        $statement->bindParam(':accidente', $accidente);
        $statement->bindParam(':tipodocumento_inf', $tipodocumento_inf);
        $statement->bindParam(':identificacion_inf', $identificacion_inf);
        $statement->bindParam(':nombres_inf', $nombres_inf);
        $statement->bindParam(':cargo_inf', $cargo_inf);
        $statement->bindParam(':telefono_inf', $telefono_inf);
        $statement->bindParam(':correo_inf', $correo_inf);

        if($statement->execute()){
            header('Location: ../Vista/index.php');
        }else{
            header('Location: ../Vista/add.php');
        }
    }
  
    public function get(){
        $rows=null;
        $statement=$this->conexion->prepare("SELECT * FROM seguridad");
        $statement->execute();
        while($result=$statement->fetch()){
            $rows[]=$result;
        }
        return $rows;
    }

    public function getById($id_seguridad){

        $rows=null;
        $statement=$this->conexion->prepare("SELECT * FROM seguridad WHERE id_seguridad=:id_seguridad");
        $statement->bindParam(":id_seguridad",$id_seguridad);
        $statement->execute();
        while($result=$statement->fetch()){
            $rows[]=$result;
        }
        return $rows;
    }

    public function update($id_seguridad,$nombretrabajador,$tipodocumento,$identificacion,$nacimiento,$sexo,$eps,$afp,$cargo,$fechaingreso,
                            $ocupacion,$zona,$tipovinculacion,$departamento,$ciudad, $direccion, $centrotrabajo, $jornada, 
                            $fechaevento, $hh, $mm, $horaevento, $jornadasucede, $tipoevento, $laborhabitual, $labor, $causamuerte, 
                            $zonaevento, $departamentoevento, $municipio, $eventoempresa, $sitio, $cuerpo, $agente_evento, $mecanismoevento,
                            $tipolesion, $descripcion, $accidente, $tipodocumento_inf, $identificacion_inf, $nombres_inf, $cargo_inf, 
                            $telefono_inf, $correo_inf){
        $statement=$this->conexion->prepare("UPDATE seguridad SET nombretrabajador=:nombretrabajador, tipodocumento=:tipodocumento, 
                                            identificacion=:identificacion, nacimiento=:nacimiento, sexo=:sexo, eps=:eps, afp=:afp, 
                                            cargo=:cargo, fechaingreso=:fechaingreso, ocupacion=:ocupacion, zona=:zona, 
                                            tipovinculacion=:tipovinculacion, departamento=:departamento, ciudad=:ciudad, 
                                            direccion=:direccion, centrotrabajo=:centrotrabajo, jornada=:jornada,  
                                            fechaevento=:fechaevento, hh=:hh, mm=:mm, horaevento=:horaevento, jornadasucede=:jornadasucede, 
                                            tipoevento=:tipoevento, laborhabitual=:laborhabitual, labor=:labor, causamuerte=:causamuerte, 
                                            zonaevento=:zonaevento, departamentoevento=:departamentoevento, municipio=:municipio, 
                                            eventoempresa=:eventoempresa, sitio=:sitio, cuerpo=:cuerpo, agente_evento=:agente_evento, 
                                            mecanismoevento=:mecanismoevento, tipolesion=:tipolesion, descripcion=:descripcion, 
                                            accidente=:accidente, tipodocumento_inf=:tipodocumento_inf, identificacion_inf=:identificacion_inf, 
                                            nombres_inf=:nombres_inf, cargo_inf=:cargo_inf, telefono_inf=:telefono_inf, correo_inf=:correo_inf WHERE id_seguridad = :id_seguridad");


        $statement->bindParam(':id_seguridad',$id_seguridad);
        $statement->bindParam(':nombretrabajador',$nombretrabajador);
        $statement->bindParam(':tipodocumento',$tipodocumento);
        $statement->bindParam(':identificacion',$identificacion);
        $statement->bindParam(':nacimiento',$nacimiento);
        $statement->bindParam(':sexo',$sexo);
        $statement->bindParam(':eps',$eps);
        $statement->bindParam(':afp',$afp);
        $statement->bindParam(':cargo',$cargo);
        $statement->bindParam(':fechaingreso',$fechaingreso);
        $statement->bindParam(':ocupacion',$ocupacion);
        $statement->bindParam(':zona',$zona);
        $statement->bindParam(':tipovinculacion',$tipovinculacion);
        $statement->bindParam(':departamento',$departamento);
        $statement->bindParam(':ciudad',$ciudad);
        $statement->bindParam(':direccion',$direccion);
        $statement->bindParam(':centrotrabajo',$centrotrabajo);
        $statement->bindParam(':jornada',$jornada);
        $statement->bindParam(':fechaevento',$fechaevento);
        $statement->bindParam(':hh',$hh);
        $statement->bindParam(':mm',$mm);
        $statement->bindParam(':horaevento',$horaevento);
        $statement->bindParam(':jornadasucede',$jornadasucede);
        $statement->bindParam(':tipoevento',$tipoevento);
        $statement->bindParam(':laborhabitual',$laborhabitual);
        $statement->bindParam(':labor',$labor);
        $statement->bindParam(':causamuerte',$causamuerte);
        $statement->bindParam(':zonaevento',$zonaevento);
        $statement->bindParam(':departamentoevento',$departamentoevento);
        $statement->bindParam(':municipio',$municipio);
        $statement->bindParam(':eventoempresa',$eventoempresa);
        $statement->bindParam(':sitio',$sitio);
        $statement->bindParam(':cuerpo',$cuerpo);
        $statement->bindParam(':agente_evento',$agente_evento);
        $statement->bindParam(':mecanismoevento',$mecanismoevento);
        $statement->bindParam(':tipolesion',$tipolesion);
        $statement->bindParam(':descripcion',$descripcion);
        $statement->bindParam(':accidente',$accidente);
        $statement->bindParam(':tipodocumento_inf',$tipodocumento_inf);
        $statement->bindParam(':identificacion_inf',$identificacion_inf);
        $statement->bindParam(':nombres_inf',$nombres_inf);
        $statement->bindParam(':cargo_inf',$cargo_inf);
        $statement->bindParam(':telefono_inf',$telefono_inf);
        $statement->bindParam(':correo_inf',$correo_inf);
        
         if($statement->execute()){
            header('Location: ../Vista/index.php');
         }else{
             header('Location: ../Vista/edit.php');
         }
    }
   
    public function delete($id_seguridad){
        $statement=$this->conexion->prepare("DELETE FROM seguridad WHERE id_seguridad = :id_seguridad");
        $statement->bindParam(":id_seguridad",$id_seguridad);
        if($statement->execute()){
            header('Location: ../Vista/index.php');
        }else{
            header('Location: ../Vista/delete.php');
        }
    }
}

?>