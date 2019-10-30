<?php 
include 'conexiones/conexion.php';
	$buscando=$_POST['buscando'];
	$con= new Conexion();
	 $fechaactual=date("Y-m-d");
	$query= $con->prepare("select nombre,cantidad,imagen,fecha,precio,precio*2 as precioreal from productos where fecha >='$fechaactual' and nombre LIKE'%$buscando%'");
	$query ->execute(array($buscando));
	$resultado= $query->fetchAll();
	 if ($resultado) {
 foreach ($resultado as $res ) {
echo "<div class='block col-lg-4' style='margin-top: 90px;''>
  <div class='top'>
    <ul>
      <li><a href='#''><i class='fa fa-star-o' aria-hidden='true'></i></a></li>
      <li><span class='converse'>".$res['nombre']."</span></li>
      
    </ul>
  </div>

  <div class='middle'>
    <img src=".$res['imagen'].">
  </div>

  <div class='bottom'>
    <div class='heading'>Chuck Taylor All Star Classic Colours</div>
    
    <div class='price'>".$res['precio']." <span class='old-price'> ".$res['precioreal']."</span></div>
  </div>
</div>";
	}
}
else{
	echo "<br><br><br><h2 style='margin-top: 90px;'>lo sentimos no se pudo encontrar</h2>";
}



   
		# code...
	


 ?>