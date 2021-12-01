<?php

require_once("../../conexion.php");
session_start();

class usuarios extends conexion{

    public function __construct(){
        $this->conexion=parent::__construct();
    }

    public function add($nombre_completo,$correo,$usuario,$contrasena,$perfil,$fecha_registro,$estado){
        $statement=$this->conexion->prepare("INSERT INTO usuarios (nombre_completo, correo, usuario, contrasena, perfil, fecha_registro, estado)
                                            VALUES(:nombre_completo, :correo, :usuario, :contrasena, :perfil, :fecha_registro, :estado)");
        $statement->bindParam(':nombre_completo',$nombre_completo);
        $statement->bindParam(':correo',$correo);
        $statement->bindParam(':usuario',$usuario);
        $statement->bindParam(':contrasena',$contrasena);
        $statement->bindParam(':perfil', $perfil);
        $statement->bindParam(':fecha_registro', $fecha_registro);
        $statement->bindParam(':estado', $estado);

        if($statement->execute()){
        header('Location: ../Vista/index.php');
        }else{
        header('Location: ../Vista/add.php');
        }
    }

    public function update($id_usuario,$nombre_completo,$correo,$usuario,$contrasena,$perfil,$fecha_registro,$estado){
        $statement=$this->conexion->prepare("UPDATE usuarios SET nombre_completo=:nombre_completo, correo=:correo, 
                    usuario=:usuario, contrasena=:contrasena, perfil=:perfil, fecha_registro=:fecha_registro, 
                    estado=:estado WHERE id_usuario = :id_usuario");


        $statement->bindParam(':id_usuario',$id_usuario);
        $statement->bindParam(':nombre_completo',$nombre_completo);
        $statement->bindParam(':correo',$correo);
        $statement->bindParam(':usuario',$usuario);
        $statement->bindParam(':contrasena',$contrasena);
        $statement->bindParam(':perfil',$perfil);
        $statement->bindParam(':fecha_registro',$fecha_registro);
        $statement->bindParam(':estado',$estado);

        if($statement->execute()){
        header('Location: ../Vista/index.php');
        }else{
        header('Location: ../Vista/edit.php');
        }
    }

    public function delete($id_usuario){
        $statement=$this->conexion->prepare("DELETE FROM usuarios WHERE id_usuario = :id_usuario");
        $statement->bindParam(":id_usuario", $id_usuario);
        if($statement->execute()){
            header('Location: ../Vista/index.php');
        }else{
            header('Location: ../Vista/delete.php');
        }
    } 

    public function login($usuario,$password){

    $rows=null;
    $statement=$this->conexion->prepare("SELECT * FROM usuarios WHERE usuario = :usuario AND contrasena = :contrasena");
    $statement->bindParam(':usuario',$usuario);
    $statement->bindParam(':contrasena',$password);
    $statement->execute();
    if ($statement->rowCount() == 1){
        $result=$statement->fetch();
        $_SESSION['nombre_completo'] = $result["nombre_completo"];
        $_SESSION['id'] = $result["id_usuario"];
        $_SESSION['perfil'] = $result["perfil"];
        return true;
    }
        return false;
    }

    public function getNombre(){
        return $_SESSION['nombre_completo'];
    }

    public function get(){
        $rows=null;
        $statement=$this->conexion->prepare("SELECT * FROM usuarios");
        $statement->execute();
        while($result=$statement->fetch()){
            $rows[]=$result;
        }
        return $rows;
    }

    public function getById($id_usuario){

        $rows=null;
        $statement=$this->conexion->prepare("SELECT * FROM usuarios WHERE id_usuario = :id_usuario");
        $statement->bindParam(":id_usuario",$id_usuario);
        $statement->execute();
        while($result=$statement->fetch()){
            $rows[]=$result;
        }
        return $rows;
    }

    public function getId(){
        return $_SESSION['id_usuario'];
    }

    public function getPerfil(){
        return $_SESSION['perfil'];
    }

    public function validarSesion(){
        if($_SESSION['id_usuario']==null){
            header('Location: ../../index.php'); 
        }
    }

    public function salir(){
        $_SESSION['id_usuario'] = null;
        $_SESSION['nombre'] = null;
        $_SESSION['perfil'] = null;
        session_destroy();
        header('Location: ../../index.php');
    }
        
    }




?>