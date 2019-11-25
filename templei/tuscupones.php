
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
  <script type="text/javascript" src="js/select.js"></script>
    <script type="text/javascript" src="js/select2.js"></script>
  <script type="text/javascript" src="js/cate.js"></script>
   <script type="text/javascript" src="js/mostrar.js"></script>
   <script type="text/javascript" src="js/oferta.js"></script>
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
                    <b><a class="navbar-brand" href="index.php">Ofert%</a></b>
                </div>
                <div id="navbar" class="navbar-collapse collapse " >
                	<ul class="nav navbar-nav">
                	
                        
                       
                    
                       
                       
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
<h1>Tus cupones</h1>
<?php 

  $cupon=$_GET["cupon"];
	$con= new Conexion();
	$query= $con->prepare("select cuponventa.fecha as fech,nombre,cantidad,monto,codigoventa,estadoven FROM productos,cuponventa WHERE usuario_idusuarios ='$cupon' and idproductos =productos_idproductos and estadoven=1");

	$query ->execute();
	$resultado= $query->fetchAll();
	foreach ($resultado as $res) {
		echo "
		<article class='card fl-left'>

      <section class='date'>
        <time datetime='23th feb'>
          <span>Cd</span><span>".$res['codigoventa']."</span>
        </time>
      </section>
      <section class='card-cont'>
        <small>precio $".$res['monto']."</small>
        <h3>".$res['nombre']."</h3>
        <div class='even-date'>
         <i class='fa fa-calendar'></i>
         <time>
           <span>Fecha del cupon </span>
           <span>".$res['fech']."</span>
         </time>
        </div>
        <div class='even-info'>
          codigo: 
          <p>
            ".$res['codigoventa']."
          </p>
        </div>
        <a href='cupondia.php?codigo=".$res['codigoventa']."'>Cangear</a>
      </section>
    </article>";
	}

	 ?>


</body>
</html>