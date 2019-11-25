<?php 
require_once "../conexiones/guardaprove.php";


if (isset($_POST["usuario"])and isset($_POST["contra"]) and isset($_POST["mail"]) and isset($_POST["provincia"])and isset($_POST["ciudad"]) and isset($_POST["direc"])) {
  
    $nom=$_POST["usuario"];
    $contra=$_POST["contra"];
    $mails=$_POST["mail"];
    $provi=$_POST["provincia"];
    $locali=$_POST["ciudad"];
    $dir=$_POST["direc"];
    $permi=3;

   
if ( repetidos($mails)) {
 
   echo "<div class='alert alert-danger'>
    <strong>Error!</strong> <a href='#' class='alert-link'>ya se ha registrado es mail</a>.
  </div>";
    }
   
    else{
    	guardarpro($nom,$mails,$permi,$contra,$provi,$locali,$dir);
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