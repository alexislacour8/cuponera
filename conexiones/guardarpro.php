<?php
function guardarproducto($nom,$precio,$codigo,$categoria,$prov,$fecha,$cantidad)
 {
  Include "conexion.php";
  $con= new Conexion();
   # code...$con= new Conexion();
  
  $query= $con->prepare("insert into productos(nombre,precio,codgio,categoria_idcategoria,usuario_idusuario,fecha,cantidad) values('$nom','$precio','$codigo','$categoria','$prov','$fecha','$cantidad')");
if ($query->execute(array($nom,$precio,$codigo,$categoria,$prov,$fecha,$cantidad)) ) {
	
	$resultado= $query->fetch();
	return true;
}
else{
	return false;
}
  
  

 }



  ?>