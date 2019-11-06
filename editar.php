<?php 
session_start();
include 'conexiones/conexion.php';
$id=$_POST['id'];
$nombre=$_POST['producto'];
$precio=$_POST['precio'];
$cantidad=$_POST['cantidad'];
$fecha=$_POST['fecha'];

$nombres=$_FILES["imagen"]["name"];
   
    $imag=$_FILES["imagen"]["name"];
    $nombreimg=$_FILES["imagen"]["tmp_name"];
    $ruta="image";
    $ruta=$ruta."/".$imag;
    move_uploaded_file($nombreimg,$ruta);

$con= new Conexion();
	$query= $con->prepare("update productos set nombre='$nombre',precio='$precio', cantidad='$cantidad',fecha='$fecha',imagen='$ruta' where idproductos = '$id' ");
	
	$resultado= $query->fetch();

	if ($query ->execute()) {
$resultado= $query->fetch();
		 echo "<center><div class='col-lg-4'>
		 <div class='alert alert-success alert-dismissible'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>se ah editado con exito!</strong>
  </div>
  </div></center>";

	}
	else{
		echo "error";
	}


 ?>