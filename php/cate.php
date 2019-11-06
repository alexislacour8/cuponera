<?php
include '../conexiones/conexion.php';
	
	$con= new Conexion();
	$query= $con->prepare("select * from subcategoria");

	$query ->execute();
	$resultado= $query->fetchAll();
	
	foreach ($resultado as $res) {
		echo"<div class='notice notice-success'>
       
   		 <strong><a class='verde' href= http://localhost/cuponera/filtro.php?filtrar=".$res['idcategoria'].">".$res['tipo']."</a></strong></div>";
	}
	

		
  ?>