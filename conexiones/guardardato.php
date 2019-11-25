<?php 
 Include  "conexion.php";
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
 function guardar($nom,$mail,$permi,$contra,$hast){
 
  $con= new Conexion();
  $query= $con->prepare("insert into usuario (nombre,mail,tipousuario,contrasena,estado) 
    values('$nom','$mail',2,'$contra','$hast')");
  if ($query ->execute(array($nom,$mail,$contra,$hast))) {
  	$resultado= $query->fetch();
  	return true;
  }
  else{
  	return false;
  } 
 }

 ?>
 