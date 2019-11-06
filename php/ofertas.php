<?php

include '../conexiones/conexion.php';

$con= new Conexion();
   $fechaactual=date("Y-m-d");
	$query= $con->prepare("select * from productos where fecha >= '$fechaactual' LIMIT 4");

	$query ->execute();
	$resultado= $query->fetchAll();

foreach ($resultado as $res) {
	echo "<a href=http://localhost/cuponera/decripcion.php?id=".$res['idproductos']."><figure class='snip1139'>
  <blockquote>Grandes Ofertas de ofertasdia aprovechala ya todos los dias tenemos nuevas ofertas 
    <div class='arrow'></div>
  </blockquote>
 <img src=".$res['imagen']." class='img'>
  <div class='author'>
    <h5>".$res['nombre']."<span>".$res['fecha']."</span></h5>
  </div>
</figure></a>";
}



	?>