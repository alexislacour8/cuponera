<?php 
session_start();
include 'conexiones/conexion.php';
if ($_GET['buscar']) {
  # code...

$buscar=$_GET['buscar'];
$fechaactual=date("Y-m-d");
$con= new Conexion();
	$query= $con->prepare("select idproductos,nombre,cantidad,imagen,fecha,precio,precio*2 as precioreal from productos where fecha >='$fechaactual' and estadopro =1 and nombre LIKE'%$buscar%'");

	$query ->execute();
	$resultado= $query->fetchAll();

  } 
  else
    header("location:index.php");
		# code...
	


 ?>
 <!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" type="text/css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="stylos/stylos.css">
<link rel="stylesheet" type="text/css" href="stylos/cupones.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="bootstrap/bootstrap.min.js"></script>

 
</head>
<body>
<div class="navbar-wrapper">
    <div class="container-fluid">
        <nav class="navbar navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <b><a class="navbar-brand" href="#">Ofert%</a></b>
                </div>
                <div id="navbar" class="navbar-collapse collapse " >
                	<ul class="nav navbar-nav">
                	
                        
                       
                    
                       
                       
                    </ul>
                  
                   <ul class="nav navbar-nav">
                   	  <li class="active"><a href="index.php" class="">Inicio</a></li>
                    <?php  if (isset($_SESSION["permiso"])){

                        if (($_SESSION["permiso"]=="administrador")) {
                          
                          echo "<li class='dropdown'><a href='#'' class='dropdown-toggle ' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>administrar<span class='caret'></span></a>
                            <ul class='dropdown-menu'>
                                <li><a href='proveedor.php'>cargar proveedor</a></li>
                                <li><a href='cargarprod.php'>cargar cupones</a></li>
                                 <li><a href='editarpro.php''>Editar y Eliminar cupon</a></li>
                            </ul>
                        </li>";
                        }


                    }else{
                      echo "";
                    }

                    ?>
                       
                       
                       
                       
                    </ul>

                  
  <form id="form" action="return false" onsubmit="return false" class="navbar-form navbar-left" >
      <div class="input-group">

        <input type="text" class="form-control"  placeholder="¿Que estas buscando?" name="buscando" id="buscando">

        <div class="input-group-btn">
          <button class="btn btn-default" id="boton" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
                    <ul class="nav navbar-nav navbar-right">

                    	 <li class=" dropdown">
                          
                   <?php 
                 if(!isset($_SESSION["nombres"])){
                    echo "";

                 }
                 else{
                  echo"<a class='dropdown-toggle ' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>".$_SESSION["nombres"]."<span class='sr-only'>(current)</span></a>";
                 }


                  ?>
                        </li>
                       
    
                        <li class="active dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-user-circle-o"></i>
                             <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                 <?php
                    if (!isset($_SESSION["user"])) {
   
                      echo "<li><a href='login.php'>Login</a></li>";
    # code...
                       }

                    else{
                       echo"<li><a href='cerrar.php'>Cerrar sesion</a></li>";
                       }
                 ?>
                               
                            </ul>
                        </li>
                       
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>



  <center><div class="col-xs-12 col-lg-12">
  <img class="banner1"  style='margin-top: 50px;' src="image/ofertas.png"></div>

</center>
<div id="busca" class="container">
 <?php 
 if ($resultado) {
	# code...

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
         echo "";
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
		# code...
	}

}

else{
	echo "<br><br><br><h2 style='margin-top: 90px;'>lo sentimos no se pudo encontrar</h2>";
}

  ?>
  </div>
  <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Editar producto</h4>
      </div>
      <div class="modal-body">
        
        <form action="return false" onsubmit="return false">
          <div id="resultados"></div>
          <div id="resultado"></div>
        <button type="submit" name="submit" id="actualizar"  class="btn btn-warning"><p class="ini"><i class="fas fa-sign-in-alt"></i>Actualizar</p></button>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>
  <script type="text/javascript" src="js/modal.js"></script>
<script type="text/javascript" src="js/editar.js"></script>
  <script type="text/javascript" src="js/buscandos.js"></script>
 </body>
 </html>