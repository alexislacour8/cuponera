
<!DOCTYPE html>
<html>
<head>

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="stylos/stylos.css">
   <link rel="stylesheet" type="text/css" href="stylos/cuponcompra.css">
     

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 
  <script src="bootstrap/bootstrap.min.js"></script>


</head>
<style type="text/css">
  .tam{
    background-color: #F8F6F6 ;
    padding: 10px;
   

  }
  .spa{
    font-size: 20px;
    text-align: center;
    color:#A29F9F;
    margin: auto;
     margin-left: 130px;
  }
  a{
    text-decoration: none;
  }
  .spas{
    font-size: 20px;
    text-align: center;
    color:#A29F9F;
    margin: auto;
    margin-bottom: 20px;
     margin-top: 20px;
     margin-right: 510px;
  }
.cant{
  font-size: 20px;
    text-align: center;
    color:#A29F9F;
}
</style>
<body>
	<br>
<h1>IMPRIMI TU CUMPON</h1>

<?php 

    $cupon=$_GET["codigo"];
	$con= new Conexion();
	$query= $con->prepare("select cuponventa.fecha as fech,productos.nombre as pro,cantidad,monto,codigoventa,canti,mail,provincia,localidad,direccion FROM productos,cuponventa,usuario WHERE codigoventa='$cupon' and idproductos =productos_idproductos and idusuario =usuario_idusuario");

	$query ->execute();
	$resultado= $query->fetchAll();
	foreach ($resultado as $res) {
		echo "
		

    
    <div class='tam col-lg-8 col-md-12 col-xs-12'>
          <span class='spa'>Codigo</span><span class='spa'> ".$res['codigoventa']."</span>
       
     
    
        <small  class='spa'>Precio $".$res['monto']."</small>
     
        <h3 class='spas'>Articulo</h3>
        <h3 class='spas'>".$res['pro']."</h3>
        
        
        <div>
        <span class='cant'>Correo: ".$res['mail']."  </span>
        <br>
         <span class='cant'>cantidad ".$res['canti']."</span>
          
          <br>
        <div>
         <br>
      
           <span>Fecha de compra</span>
           <span>".$res['fech']." valido por 30 dias </span>
           <br>
            <span>Ubicacion: ".$res['provincia']." </span>
            <br>
             <span>localidad: ".$res['localidad'].", </span>
              <span>direccion: ".$res['direccion']." </span>
        
        </div>
        </div>
        <div class='pron'>
       
           <a href='pdfcupo.php?codigo=".$res['codigoventa']."' class='btn btn-danger'>cangear</a>
        </div>
       </div>
   
   ";
	}

	 ?>
</body>
</html>
