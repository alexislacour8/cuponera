<?php 
function guardarpro($nom,$mail,$permi,$contra,$prov,$ciudad,$dire)
 {
  Include "conexion.php";
  $con= new Conexion();
   # code...$con= new Conexion();
  $query= $con->prepare("insert into usuario (nombre,mail,tipousuario,contrasena,provincia,localidad,direccion) 
    values('$nom','$mail','$permi','$contra','$prov','$ciudad','$dire')");

  $query ->execute(array($nom,$mail,$permi,$contra,$prov,$ciudad,$dire));
  $resultado= $query->fetch();
 }

 ?>