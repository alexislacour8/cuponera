<?php 
include '../conexiones/conexion.php';
$id=$_POST['id'];
$con= new Conexion();
  $query= $con->prepare("update productos set estadopro=0 where idproductos ='$id'");

 
  $resultado= $query->fetch();
  if ($query ->execute()) {
$resultado= $query->fetch();
		 echo "<center><div class='col-lg-4'>
		 <div class='alert alert-success alert-dismissible'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>se ah eliminado correctamnete!</strong>
  </div>
  </div></center>";
 

	}
	else{
		 echo "ERROORRRRRR CODIGO INVALIDO";

	}


?>