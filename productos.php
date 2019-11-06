<?php 
require_once "conexiones/guardarpro.php";


if ($_POST["producto"] and $_POST["precio"]  and $_POST["categorias"]  and $_POST["proveedor"] and $_POST["cantidad"] and $_POST["fecha"] and $_FILES["imagen"]) {
  
    $nom=$_POST["producto"];
    $precio=$_POST["precio"];
    $categoria=$_POST["categorias"];
    $prove=$_POST["proveedor"];
    $cantidad=$_POST["cantidad"];
   
    $fecha=$_POST["fecha"];
    $codigo=md5(time());
    $nombre=$_FILES["imagen"]["name"];
   
    $imag=$_FILES["imagen"]["name"];
    $nombreimg=$_FILES["imagen"]["tmp_name"];
    $ruta="image";
    $ruta=$ruta."/".$imag;
    move_uploaded_file($nombreimg,$ruta);

    
    $resultado= guardarproducto($nom,$precio,$codigo,$categoria,$prove,$ruta,$fecha,$cantidad);

    if ($resultado) {

    	 echo "<div class='alert alert-success alert-dismissible'>
    <a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>Se ha dado de alto</strong>el cupon ".$nom."
  </div>";
    	# code...
    }
    else{
    	 
       echo "<div class='alert alert-danger'>error no se pasan los datos
     
  </div>";
    }
}
else{
   echo "<div class='alert alert-danger'>
    <strong>Error!</strong> <a href='#' class='alert-link'>faltan datos</a>.
  </div>";
    
   }

 ?>