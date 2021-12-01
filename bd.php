<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conexion = new PDO("mysql:host=$servername", $username, $password);
  // set the PDO error mode to exception
  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "CREATE DATABASE sit";
  // use exec() because no results are returned
  $conexion->exec($sql);
  echo "Base de datos creada correctamente";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conexion = null;
?>