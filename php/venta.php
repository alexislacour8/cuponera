
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
 

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
  <script src="bootstrap/bootstrap.min.js"></script>
<?php 
require_once "../conexiones/ventasinser.php";
if ($_POST["idusuario"] and $_POST["id"] and $_POST["precio"] and $_POST["cantidad"]) {
        $idusuario=$_POST['idusuario'];
        $producto=$_POST['id'];
        $precio=$_POST['precio'];
        $cantidad=$_POST['cantidad'];
        $fechaactual=date("Y-m-d");
        $codigo=md5(time());
        $resultado= ventas($fechaactual,$precio,$idusuario,$producto,$codigo,$cantidad);
         $con1= new Conexion();
          $query1= $con1->prepare("update productos set cantidad=cantidad-'$cantidad' where idproductos='$producto'");
          $query1->execute();
          $resultado1= $query1->fetch();

            if ($resultado) {
        echo "<div class='alert alert-success alert-dismissible'>
            <a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <strong>Se ha efectuado la venta</strong>
          </div>";
            	 
            	# code...
            }
            else{
            	
              echo "<center><div class='col-lg-5'><div class='alert alert-danger'>
            <strong>Error!</strong> <a href='#' class='alert-link'>al guardar</a>.
          </div></div></center>";
            }
}
else{
	 echo "<center><div class='col-lg-5'><div class='alert alert-success alert-dismissible'>
    <a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>Se ha efectuado la venta</strong>
  </div></div></center>";
}
 ?>
<script type="text/javascript">
  function tiempo() {
    location.href="http://localhost/cuponera/index.php";
    // body...
  }
  setTimeout("tiempo()",5000);
</script>
<style type="text/css">
  .bg-overlay {
    background: linear-gradient(rgba(0,0,0,.7), rgba(0,0,0,.7)), url("https://unsplash.imgix.net/photo-1416339442236-8ceb164046f8?q=75&fm=jpg&s=8eb83df8a744544977722717b1ea4d09");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    color: #fff;
    height: 450px;
    padding-top: 50px;
}
</style>
<div class="container bg-overlay">
  <div class="row text-center">
    <h1>Muchas gracias<br>por comprar en OfertasDia</h1>
        <h4>ahora te redigiremos al Inicio <strong>donde</strong> podras ver tu cupon<br>
       gracias por la compra en OfertasDia</h4>
        <br><br>
       
  </div>
</div>