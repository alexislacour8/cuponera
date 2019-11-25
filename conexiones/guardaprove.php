<?php 
  Include "conexion.php";
function repetidos($mails){

  $con1= new Conexion();
  $query1= $con1->prepare("SELECT * FROM usuario WHERE mail = ?");
  $query1 ->execute(array($mails));
  $resultado=$query1->fetchAll();
  $cantidad=count($resultado);
  
  if ($cantidad == 0) {
       return false;
  }
  else{

    return  true;
  }
} 
function guardarpro($nom,$mail,$permi,$contra,$prov,$ciudad,$dire)
 {

  $con= new Conexion();
   # code...$con= new Conexion();
  $query= $con->prepare("insert into usuario (nombre,mail,tipousuario,contrasena,provincia,localidad,direccion) 
    values('$nom','$mail',3,'$contra','$prov','$ciudad','$dire')");

  $query ->execute(array($nom,$mail,$permi,$contra,$prov,$ciudad,$dire));
  $resultado= $query->fetch();
 }

 ?>