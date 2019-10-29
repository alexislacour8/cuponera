<?php 
session_start();
if (isset($_SESSION["permiso"])) {
	# code...

if (($_SESSION["permiso"]=="usuario") || ($_SESSION["permiso"]=="proveedor")){
	header("location:menu.php");
}
}
else{
	header("location:menu.php");
}

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
   <link rel="stylesheet" type="text/css" href="stylos/valida.css">
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
                    <ul class="nav navbar-nav hidden-lg hidden-md hidden-sm">
                        <li class="active"><a href="#" class="">Inicio</a></li>
                        <li class=" dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cine</a>
                           
                        </li>
                        <li><a href="addnew.html">Productos</a></li>
                       
                       
                       
                    </ul>
                   <ul class="nav navbar-nav">
                   	  <li class="active"><a href="menu.php" class="">Inicio</a></li>
                    <?php  if (isset($_SESSION["permiso"])){

                        if (($_SESSION["permiso"]=="administrador")) {
                          
                          echo "<li class='dropdown'><a href='#'' class='dropdown-toggle ' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>administrar<span class='caret'></span></a>
                            <ul class='dropdown-menu'>
                                <li><a href='#''>cargar proveedor</a></li>
                                <li><a href='#''>cargar cupones</a></li>
                                 
                            </ul>
                        </li>";
                        }


                    }else{
                      echo "";
                    }

                    ?>
                       
                       
                       
                       
                    </ul>

                  

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
<div class="row" style="margin-top:20px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
    <div id="resultado"></div>
    	<form role="form" action="return false" onsubmit="return false">
			
				<h2>Registrar proveedor</h2>
				<hr class="colorgraph">
        <div class="form-group">
				<div class="form-group col-lg-12">
                    <input type="text" name="usuario" id="usuario" class="form-control input-lg" placeholder="Nombre"><label  id ="mensaje1">Completar campo</label>
				</div>
                <br>
               
				<div class="form-group col-lg-12">
                    <input type="email" name="mail" id="mail" class="form-control input-lg" placeholder="Email"><label  id ="mensaje2">Completar campo</label>
				</div>
        <br>
        
        <div class="form-group col-lg-6">
        <select id="provincia" name="provincia" class="form-control input-lg  dropdown-toggle" type="button" data-toggle="dropdown" required>Provincias
                    <span class="caret"></span>
                  </select>
                  
                </div>
                 <br>
                <div class="form-group col-lg-6">

                  <select id="ciudad" name="ciudad" class="form-control input-lg dropdown-toggle" type="button" data-toggle="dropdown" required>Localidades<span class="caret"></span>
                  </select>
			
                </div>
                     <br>
                     <div class="form-group col-lg-6">
                    <input type="text" name="direc" id="direc" class="form-control input-lg" placeholder="direccion"><label  id ="mensaje4">Completar campo</label>
        </div>
                   
                     <br>
        <div class="form-group col-lg-6">
                    <input type="password" name="contra" id="contra" class="form-control input-lg" placeholder="Contraseña"><label  id ="mensaje3">Completar campo</label>
        </div>
       
        
				<hr class="colorgraph">
     
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <input type="submit" id="boton" class="btn btn-lg btn-success btn-block" value="registro">
					</div>
					
				</div>
			
      </div>
		</form>
     
	</div>
</div>

</div>
 <script type="text/javascript" src="js/provedor.js"></script>
</body>
</html>