<?php 
 Include  "conexion.php";
 function repetidos($mails){

     $con1= new Conexion();
     $query= $con1->prepare("SELECT * FROM usuario WHERE mail = $mails");
  $resultado= $query->fetch();
  if ($query ->execute(array($mails))) {
   $resultado= $query->fetch();
    return true;
  }
  else{

    return false;
  }
} 
 function guardar($nom,$mail,$permi,$contra,$hast){
 
  $con= new Conexion();
  $query= $con->prepare("insert into usuario (nombre,mail,tipousuario,contrasena,estado) 
    values('$nom','$mail','$permi','$contra','$hast')");
  if ($query ->execute(array($nom,$mail,$permi,$contra,$hast))) {
  	$resultado= $query->fetch();
  	return true;
  }
  else{
  	return false;
  } 
 }
 
 ?>
 