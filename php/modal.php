<?php 
session_start();
include '../conexiones/conexion.php';
	$id=$_POST['id'];
	$con= new Conexion();
	
	$query= $con->prepare("select * from productos where idproductos=".$id."");
	$query ->execute(array($id));
	$resultado= $query->fetchAll();

	foreach ($resultado as $res) {

		echo " <input type='text' name='id' id='id' class='form-control hidden' value='".$res['idproductos']."'   required >
           <br>
        <input type='text' name='nombre' id='nombre' class='form-control' value='".$res['nombre']." '  required >
        <br>
       
         <input type='number' name='precio' id='precio' class='form-control' value=".$res['precio']."  required >
         <br>
          <input type='number' name='cantidad' id='cantidad' class='form-control' value=".$res['cantidad']."  required >
          
          <br>";
		
	}


 ?>