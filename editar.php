<?php 
session_start();
include 'conexiones/conexion.php';
if ($_POST["producto"] and $_POST["precio"]  and $_POST["categorias"]  and $_POST["proveedor"] and $_POST["fecha"]) {
	# code...

$id=$_POST['id'];
$nombre=$_POST['producto'];
$precio=$_POST['precio'];
$cantidad=$_POST['cantidad'];
$fecha=$_POST['fecha'];
if (isset($_FILES['imagen'])) {
	# code...

$nombres=$_FILES["imagen"]["name"];
   
    $imag=$_FILES["imagen"]["name"];
    $nombreimg=$_FILES["imagen"]["tmp_name"];
    $ruta="image";
    $ruta=$ruta."/".$imag;
    move_uploaded_file($nombreimg,$ruta);
    $con= new Conexion();
	$query= $con->prepare("update productos set nombre='$nombre',precio='$precio',fecha='$fecha',imagen='$ruta' where idproductos = '$id' ");
	
	$resultado= $query->fetch();

}
else{
	$con= new Conexion();
	$query= $con->prepare("update productos set nombre='$nombre',precio='$precio',fecha='$fecha' where idproductos = '$id' ");
	
	$resultado= $query->fetch();
}
if (!is_numeric($precio)) {
	echo " <div class='alert alert-danger alert-dismissible fade in'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>ERROR faltal!</strong>no se admineten letras
  </div>
</div>";

}
 
	elseif ($query ->execute()) {
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

}
else{
	echo " <div class='alert alert-danger alert-dismissible fade in'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>ERROR faltaron datos!</strong>no se efectuo la modificacion
  </div>
</div>";

}

 ?>