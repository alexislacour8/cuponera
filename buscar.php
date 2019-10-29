<?php 
$buscar;
$con= new Conexion();
  $query= $con->prepare("select * from productos where nombre like'%$buscar%'");

  $query ->execute();
  $resultado= $query->fetchAll();

?>