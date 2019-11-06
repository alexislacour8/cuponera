<?php 
function buscandos($buscar)
{
	# code...

include 'conexiones/conexion.php';

$con= new Conexion();
	$query= $con->prepare("select * from productos where nombre like'%$buscar%'");

	$query ->execute(array($buscar));
	$resultado= $query->fetchAll();

   
		# code...
	}


 ?>