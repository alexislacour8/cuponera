<?php 
Include "conexiones/conexion.php";
    $codigo=$_GET["codigo"];
	$con= new Conexion();
	$query= $con->prepare("update usuario set estado = '' where estado = '$codigo' ");
	
	$resultado= $query->fetch();
	if ($query ->execute()) {
		# code...
		$resultado= $query->fetch();
		Include_once "registroexito.html";
	}
	else{
		Include_once "fallido.html";
	}
 ?>
 