<?php
function guardarproducto($nom,$precio,$codigo,$categoria,$prov,$ruta,$fecha,$cantidad)
 {
  Include "conexion.php";
  $con= new Conexion();
   # code...$con= new Conexion();
  
  $query= $con->prepare("insert into productos(nombre,precio,codgio,categoria_idcategoria,usuario_idusuario,imagen,fecha,cantidad) values('$nom','$precio','$codigo','$categoria','$prov','$ruta','$fecha','$cantidad')");
if ($query->execute(array($nom,$precio,$codigo,$categoria,$prov,$ruta,$fecha,$cantidad))) {
	
	$resultado= $query->fetch();
	return true;
}
else{
	return false;
}
  
  

 }



  ?>