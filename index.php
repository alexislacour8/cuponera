<?php 
session_start();
require_once "conexiones/verificarpermiso.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	

		<!-- Web Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" type="text/css">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="stylos/stylos.css">
    <link rel="stylesheet" type="text/css" href="stylos/ofertas.css">
     <link rel="stylesheet" type="text/css" href="stylos/select2.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/select.js"></script>
    <script type="text/javascript" src="js/select2.js"></script>
  <script type="text/javascript" src="js/cate.js"></script>
   <script type="text/javascript" src="js/mostrar.js"></script>
   <script type="text/javascript" src="js/oferta.js"></script>
   <script type="text/javascript" src="js/carrucel.js"></script>
  <script src="bootstrap/bootstrap.min.js"></script>

</head>

<script type="text/javascript">
	$(window).bind("load resize slid.bs.carousel", function() {
  var imageHeight = $(".active .holder").height();
  $(".controllers").height( imageHeight );
  console.log("Slid");
});
</script>
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
                    <ul class="nav navbar-nav hidden-lg hidden-md hidden-sm">
                        <li class="active"><a href="#" class="">Inicio</a></li>
                    
                        
                      
                       
                    </ul>
                   <ul class="nav navbar-nav">
                    <?php if (verificarpermiso("CARGAR_CUPON")) {

                          echo "<li class='dropdown'><a href='#'' class='dropdown-toggle ' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>administrar<span class='caret'></span></a>
                            <ul class='dropdown-menu'>
                                <li><a href='proveedor.php'>cargar proveedor</a></li>
                                <li><a href='cargarprod.php''>cargar cupones</a></li>
                                  <li><a href='editarpro.php''>Editar y Eliminar cupon</a></li>
                                 
                            </ul>
                        </li>";
                        }
                        if (verificarpermiso("VER_VENTAS")) {
                           echo "<li class='dropdown'><a href='#'' class='dropdown-toggle ' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Mis cupones<span class='caret'></span></a>
                            <ul class='dropdown-menu'>
                              <li><a href='ventasprove.php?nume=".$_SESSION["id"]."'>ver tus ventas </a></li>
                                <li><a href='provecupon.php?nume=".$_SESSION["id"]."'>ver tus ventas sin validar</a></li>
                                 
                            </ul>
                        </li>";
                        }
                        if (verificarpermiso("COMPRAS")) {
                           echo "<li class='dropdown'><a href='#'' class='dropdown-toggle ' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Tus cupones<span class='caret'></span></a>
                            <ul class='dropdown-menu'>
                                <li><a href='miscupones.php?cupon=".$_SESSION["id"]."'>Mis cupones</a></li>
                               
                                 
                            </ul>
                        </li>";
                        }



                    else{
                      echo "";
                    }

                    ?>
                       
                       
                       
                       
                    </ul>

                    <form id="form" method="GET" action="buscapro.php" class="navbar-form navbar-left" >
      <div class="input-group">

        <input type="text" class="form-control"  placeholder="¿Que estas buscando?" name="buscar" id="buscar">

        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
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
<br>
<br>
<br>


<center><div class="col-xs-12 col-lg-12">
	<img class="banner" src="image/imagen.png"></div></center>

<div class="col-lg-12 col-xs-12 col-md-12 hidden-lg hidden-md">
  <div class="col-lg-2 text-center">
    <h4>Busqueda Filtrada</h4>
  </div>
  <div class="col-lg-2  col-sm-offset-0 col-xs-offset-1" >
	<select id="categorias" class="form-control" name="" style="width: 90%;">
		
		
	</select>

 </div>
</div>

<div id="pon" class="col-lg-12 col-xs-12 col-md-12">
	<div class="col-lg-2 col-md-2 hidden-xs hidden-sm">
		<h3 class="h">Populares</h3>
    <div id="cate">
      
    </div>
		
   
	</div>
<div id="pont" class="col-lg-10 col-md-10 col-xs-12">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
<!-- Wrapper for slides -->
<div id="myCarousel" class="carousel-inner">
<div class="item active">
  <div class="holder col-sm-12 col-lg-8 col-md-8 col-xs-12">
    <img class="img-responsive" src="image/cel.jpg" alt="...">
     <div class="hidden-lg hidden-md">
  <div class="carousel-caption">
         <h3>Samsung A20</h3>
        <p>Celular A20 32GB 4GB De memoria Ram pantalla super amoled</p>
           <p class="pre" >$35.000</p>
       <p class="ofert">$29.000</p>
       <a href="" class="btn btn-success">Ver oferta</a>
     </div>
     </div>
  </div>
  <div class="col-sm-4 hidden-xs">
  	<div class="hidden-sm">
    <div class="carousel-caption1">
        <h3>Samsung A20</h3>
        <p>Celular A20 32GB 4GB De memoria Ram pantalla super amoled</p>
       <p class="oferta">$35.000</p>
       <p class="precio">$29.000</p>
      </div>
    </div>
  </div>
</div>
<div class="item">
  <div class="holder col-sm-12 col-lg-8 col-md-8 col-xs-12">
    <img class="img-responsive" src="image/caribe.jpg" alt="...">
 <div class="hidden-lg hidden-md">
  <div class="carousel-caption">
         <h3>Viaje al caribe</h3>
        <p>Hacelo hasta 12 cuotas sin interes 7 dias y 6 noches</p>
           <p class="pre" >$55.000</p>
       <p class="ofert">$40.000</p>
       <a href="" class="btn btn-success">Ver oferta</a>
     </div>
     </div>
  </div>
  <div class="col-sm-4 hidden-xs">
  	<div class="hidden-sm">
    <div class="carousel-caption1">
    	
        <h3>Viaje al caribe</h3>
        <p>Hacelo hasta 12 cuotas sin interes 7 dias y 6 noches</p>
          <p class="oferta">$50.000</p>
       <p class="precio">$40.000</p>
       </div>
    </div>
  </div>
</div>
<div class="item">
  <div class="holder col-sm-12 col-lg-8 col-md-8 col-xs-12">
    <img class="img-responsive" src="image/Parrillada.jpg" alt="...">
    <div class="hidden-lg hidden-md">
  <div class="carousel-caption">
         <h3>Parrillada</h3>
        <p>Disfruta de una parrilada para 2 personas + 2 bebidas</p>
           <p class="pre" >$1000</p>
       <p class="ofert">$800</p>
       <a href="" class="btn btn-success">Ver oferta</a>
     </div>
     </div>
  </div>
  <div class="col-sm-4 hidden-xs">
  	<div class="hidden-sm">
    <div class="carousel-caption1">
        <h3>Parrillada</h3>
        <p>Disfruta de una parrilada para 2 personas + 2 bebidas </p>
        <p class="oferta">$1000</p>
             <p class="precio">$700</p>
    </div>
</div>
  </div>
</div>
</div>
<div class="controllers col-sm-8 col-xs-12">
<!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol> 
</div>
	</div>
</div>
</div>

	
	<center><div class="col-xs-12 col-lg-12">
	<img class="banner1" src="image/imag.png"></div>

</center>
<br>
<br>
<center><div id="ofert">
  
</div>
 </center>
<br>
<center><div class="col-xs-12 col-lg-12">
	<img class="banner2" src="image/ahora.png"></div>

</center>


<div class="col-xs-12 col-lg-12 ">

<section class="details-card">

    <div class="container">
        <div class="row">
        	<h3 class="h">!Las mejores Ofertas¡</h3>
           <div id="mostrar"></div>
        </div>
    </div>
</section>
</div><?php 
  if (isset($_SESSION["permiso"])){

            if (($_SESSION["permiso"]=="administrador") ||($_SESSION["permiso"]=="proveedor")) {

              echo "<script type='text/javascript' src='mensaje.js'></script>";

                        }

      }
      else{
        echo "";
      }
 ?>
<script>
    document.getElementById("categorias").onchange = function() {
        if (this.selectedIndex!==0) {
            window.location.href = this.value;
        }        
    };
</script>
</body>
</html>
