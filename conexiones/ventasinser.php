<?php 

function ventas($fecha,$precio,$iduser,$idpro,$codigo,$cantidad)
 {
  Include "conexion.php";
  $con= new Conexion();
   # code...$con= new Conexion();
  
  $query= $con->prepare("insert into cuponventa(fecha,monto,usuario_idusuario,productos_idproductos,codigoventa,canti) values('$fecha','$monto','$iduser','$idpro','$codigo','$cantidad')");
if ($query->execute(array($fecha,$precio,$iduser,$idpro,$codigo,$cantidad))) {
	
	$resultado= $query->fetch();
	return true;
}
else{
	return false;
}
  
  

 }

 ?>