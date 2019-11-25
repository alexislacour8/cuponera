<?php 
 Include "conexion.php";
function ventas($fecha,$monto,$iduser,$idpro,$codigo,$cantidad)
 {
 
  $con= new Conexion();
   # code...$con= new Conexion();
  
  $query= $con->prepare("insert into cuponventa(fecha,monto,usuario_idusuarios,productos_idproductos,codigoventa,canti) values('$fecha','$monto','$iduser','$idpro','$codigo','$cantidad')");

if ($query->execute(array($fecha,$monto,$iduser,$idpro,$codigo,$cantidad))) {
	
	$resultado= $query->fetch();
	return true;
}
else{
	return false;
}
  
  

 }

 ?>
