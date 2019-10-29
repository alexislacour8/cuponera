<?php 
require_once "../conexiones/guardaprove.php";


if (isset($_POST["usuario"])and isset($_POST["contra"]) and isset($_POST["mail"]) and isset($_POST["provincia"])and isset($_POST["ciudad"]) and isset($_POST["direc"])) {
  
    $nom=$_POST["usuario"];
    $contra=$_POST["contra"];
    $mails=$_POST["mail"];
    $provi=$_POST["provincia"];
    $locali=$_POST["ciudad"];
    $dir=$_POST["direc"];
    $permi="proveedor";

    $resultado= guardarpro($nom,$mails,$permi,$contra,$provi,$locali,$dir);

    if ($resultado) {

    	 echo "<div class='alert alert-danger'>
    <strong>Error!</strong> <a href='#' class='alert-link'>al guardar</a>.
  </div>";
    	# code...
    }
    else{
    	
      echo "<div class='alert alert-success alert-dismissible'>
    <a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>Se ha dado de alto</strong>el proveedor ".$nom."
  </div>";
    }
}
else{
     echo "<div class='alert alert-danger'>
    <strong>Error!</strong> <a href='#' class='alert-link'>al guardar</a>.
  </div>";
}

 ?>