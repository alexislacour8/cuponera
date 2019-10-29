<?php 
require_once "conexiones/guardarpro.php";


if ($_POST["producto"] and $_POST["precio"]  and $_POST["categorias"]  and $_POST["proveedor"] and $_POST["cantidad"]  and $_POST["fecha"]) {
  
    $nom=$_POST["producto"];
    $precio=$_POST["precio"];
    $categoria=$_POST["categorias"];
    $prove=$_POST["proveedor"];
    $cantidad=$_POST["cantidad"];
   
    $fecha=$_POST["fecha"];
    $codigo=md5(time());
   

    
    $resultado= guardarproducto($nom,$precio,$codigo,$categoria,$prove,$fecha,$cantidad);

    if ($resultado) {

    	 echo "<div class='alert alert-success alert-dismissible'>
    <a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>Se ha dado de alto</strong>el cupon ".$nom."
  </div>";
    	# code...
    }
    else{
    	 
       echo "<div class='alert alert-danger'>
     
  </div>";
    }
}
else{
   echo "<div class='alert alert-danger'>
    <strong>Error!</strong> <a href='#' class='alert-link'>al guardar</a>.
  </div>";
    
   }

 ?>