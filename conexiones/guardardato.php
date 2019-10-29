<?php 

    
    
 
 function guardar($nom,$mail,$permi,$contra,$hast)
 {
  Include "conexion.php";
  $con= new Conexion();
   # code...$con= new Conexion();
  $query= $con->prepare("insert into usuario (nombre,mail,tipousuario,contrasena,estado) 
    values('$nom','$mail','$permi','$contra','$hast')");

  $query ->execute(array($nom,$mail,$permi,$contra,$hast));
  $resultado= $query->fetch();
 }
 ?>