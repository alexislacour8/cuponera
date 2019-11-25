<?php 
include '../conexiones/conexion.php';
$id=$_POST['id'];
$cd=$_POST['cod'];
$con= new Conexion();
  $query= $con->prepare("update cuponventa set estadoven = 0 where codigoventa ='$id' and idcuponventa='$cd'");

 
  $resultado= $query->fetch();

  if ($query ->execute()) {
$resultado= $query->fetch();
		 echo "<center><div class='col-lg-4'>
		 <div class='alert alert-success alert-dismissible'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>se ah validado el codigo correctamente!</strong>
  </div>
  </div></center>";
 

	}
	else{
		 echo "ERROORRRRRR CODIGO INVALIDO";

	}


?>