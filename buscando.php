<?php 
session_start();
include 'conexiones/conexion.php';
	$buscando=$_POST['buscando'];
	$con= new Conexion();
	 $fechaactual=date("Y-m-d");
	$query= $con->prepare("select idproductos,nombre,cantidad,imagen,fecha,precio,precio*2 as precioreal from productos where fecha >='$fechaactual' and nombre LIKE'%$buscando%'");
	$query ->execute(array($buscando));
	$resultado= $query->fetchAll();
	 if ($resultado) {
 foreach ($resultado as $res ) {
echo "<div class='block col-lg-4 col-md-4 col-sm-4' style='margin-top: 70px;''>

  <div class='top'>
    <ul>
    
      <li><span class='converse'>".$res['nombre']."</span></li>
     
    </ul>
  </div>

  <div class='middle'>
    <img src=".$res['imagen'].">
  </div>

  <div class='bottom'>
    <div class='heading'>las mejores ofertas compra tu cupon</div>";
    if (isset($_SESSION["permiso"])) {

      if($_SESSION["permiso"]=="administrador"){
         echo "<form action='return false' onsubmit='return false' > <input type=text class='hidden' name=id value=".$res['idproductos']." id=id> <div class='style'><input type=submit id=botones value =Editar data-toggle='modal' data-target='#myModal' class='btn btn-info'></div></form>";
      }
      
      else{
        echo "<div class='style'><a href=http://localhost/cuponera/decripcion.php?id=".$res['idproductos']." class='btn btn-success'>Ver Oferta</a></div>";
      }
      # code...
    }
     else{
        echo "<div class='style'><a href=http://localhost/cuponera/decripcion.php?id=".$res['idproductos']." class='btn btn-success'>Ver Oferta</a></div>";
      }
     
    
   echo "<div class='price'>".$res['precio']." <span class='old-price'> ".$res['precioreal']."</span></div>
  </div>

</div>";
	}
}
else{
	echo "<br><br><br><h2 style='margin-top: 90px;'>lo sentimos no se pudo encontrar</h2>";
}



   
		# code...
	


 ?>
 <script type="text/javascript" src="js/modal.js"></script>