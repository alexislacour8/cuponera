

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
   <link rel="stylesheet" type="text/css" href="stylos/valida.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="bootstrap/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/validaregistro.js"></script>
</head>
<style type="text/css">
	.fa-envira{
		color: #3FBA22; 
	}
	.highlight{
		color: #3FBA22; 
	}
	#blanco{
		color: white;
	}
	.navbar-inverse {
    background-color: #09ba32;
    border-color: #09ba32;
}
.navbar-nav li:hover{
	background: #1E8E03 ;
	border-radius: 4px;
}
.navbar {
     border-radius:0px;
}
.navbar-inverse .navbar-nav>li>a {
    color: white;
}

</style>
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
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="menu.php" class="">Inicio</a></li>
                        <li class=" dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cine</a>
                           
                        </li>
                        <li><a href="addnew.html">Productos</a></li>
                        <li class=" dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Viajes <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">sur</a></li>
                                <li><a href="#">patagonia</a></li>
                                 <li><a href="#">otros lugares</a></li>
                            </ul>
                        </li>
                       
                       
                    </ul>
                    <form class="navbar-form navbar-left" >
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
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
    	<form role="form" action="return false" onsubmit="return false"">
			
				<h2>Registro</h2>
				<hr class="colorgraph">
				<div class="form-group">
                    <input type="text" name="usuario" id="usuario" class="form-control input-lg" placeholder="Nombre"><label  id ="mensaje1">Completar campo</label>
				</div>
                <br>
				<div class="form-group">
                    <input type="email" name="mail" id="mail" class="form-control input-lg" placeholder="Email"><label  id ="mensaje2">Completar campo</label>
				</div>
			

                    <br>
        <div class="form-group">
                    <input type="password" name="contra" id="contra" class="form-control input-lg" placeholder="Contraseña"><label  id ="mensaje3">Completar campo</label>
        </div>

				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
                        <input type="submit" id="boton" class="btn btn-lg btn-success btn-block" value="registro">
					</div>
					
				</div>
			

		</form>
     
	</div>
</div>

</div>

</body>

</html>