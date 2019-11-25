<!DOCTYPE html>
<html>
<head>
  <title></title>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="stylos/stylos.css">
      <link rel="stylesheet" type="text/css" href="stylos/valida.css">
      <link rel="stylesheet" type="text/css" href="stylos/editar.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="bootstrap/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/buscarpro.js"></script>
   <script type="text/javascript" src="js/editar.js"></script>
   <script type="text/javascript" src="js/categoria.js"></script>
</script><link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
<script src="https://code.jquery.com/jquery-2.2.4.js">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 
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
                      <li class="active"><a href="index.php" class="">Inicio</a></li>
         
                         <?php if (verificarpermiso("CARGAR_CUPON")) {

                          echo "<li class='dropdown'><a href='#'' class='dropdown-toggle ' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>administrar<span class='caret'></span></a>
                            <ul class='dropdown-menu'>
                                <li><a href='proveedor.php'>cargar proveedor</a></li>
                                <li><a href='cargarprod.php''>cargar cupones</a></li>
                                  <li><a href='editarpro.php''>Editar y Eliminar cupon</a></li>
                                 
                            </ul>
                        </li>";
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
<br>
<br>
<br>
<div id="edit">
	
</div>

<div class="container">
    <div class="row">
    
 
        <div class="col-md-10 col-md-offset-1">
	
   
    <br>
            <div class=" panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Cupones</h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                  <button type="button" id="refresca" class="btn btn-sm btn-primary btn-create">Actualizar tabla</button>
                   <button type="button" id="stockbajos" class="btn btn-sm btn-primary btn-create">Stock bajos</button>
                  </div>
                </div>
              </div>
               <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Cupones</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span>Buscar filtrando</button>
                </div>
            </div>
              <div class="panel-body table-responsive">
                <table class="table table-fixep">
                  <thead>
                    <thead>
                    <tr class="filters">
                        <th style="width: 200px;">Editar Eliminar</th>
                        <th><input type="text" class="form-control" placeholder="Nombre" disabled></th>
                        <th><input type="text" class="form-control" placeholder="precio" disabled ></th>
                        <th><input type="text" class="form-control" placeholder="cantidad" disabled></th>
                         <th><input type="text" class="form-control" placeholder="Proveeror mail" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Categoria" disabled></th>
                         <th><input type="text" class="form-control" placeholder="Fecha" disabled></th>
                          <th>Imiganes<th>
                    </tr>
                </thead>
                  </thead>
                  <tbody id="myTable">
                
                         
                         
                        </tbody>
                </table>
            
              </div>
              <div class="panel-footer">
                <div class="row">
                  
                  <div class="col col-xs-4">Paginacion
                  </div>
                  <div class="col col-xs-8">
                    <ul class="pagination hidden-xs pull-right" id="myPager">
                    </ul>
                    <ul class="pagination visible-xs pull-right">
                        <li><a href="#">«</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

</div></div></div>
</body>
</html>
