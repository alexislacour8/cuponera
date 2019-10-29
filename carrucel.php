<?php 
include 'conexiones/conexion.php';

$con= new Conexion();
	$query= $con->prepare("select * from productos");

	$query ->execute();
	$resultado= $query->fetchAll();

foreach ($resultado as $res) {

	echo "<div id='carousel-example-generic' class='carousel slide' data-ride='carousel'>

<div id='myCarousel' class='carousel-inner'>
<div class='item active'>
  <div class='holder col-sm-12 col-lg-8 col-md-8'>
    <img class='img-responsive' src=".$res['imagen'].">
     <div class='hidden-lg hidden-md'>
  <div class='carousel-caption'>
         <h3>".$res['nombre']."</h3>
        <p>Celular A20 32GB 4GB De memoria Ram pantalla super amoled</p>
           <p class='pre' >".$res['precio']."</p>
       <p class='ofert'>".$res['precio']."</p>
       <a href='' class='btn btn-success'>Ver oferta</a>
     </div>
     </div>
  </div>
  <div class='col-sm-4 hidden-xs'>
  	<div class='hidden-sm'>
    <div class='carousel-caption1'>
        <h3>".$res['nombre']."</h3>
        <p>Celular A20 32GB 4GB De memoria Ram pantalla super amoled</p>
       <p class='oferta'>".$res['precio']."</p>
       <p class='precio'>".$res['precio']."</p>
      </div>
    </div>
  </div>
</div>

  </div>
</div>";
}

 ?>