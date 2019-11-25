

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
  
      <link rel="stylesheet" type="text/css" href="stylos/editar.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 
  <script src="bootstrap/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/buscarpro.js"></script>
   
   
 </script><link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-2.2.4.js">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/validacupon.js"></script>
<script type="text/javascript" src="js/paginacion.js"></script>
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
                  <?php  if (verificarpermiso("VER_VENTAS")) {
                           echo "<li class='dropdown'><a href='#'' class='dropdown-toggle ' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Mis cupones<span class='caret'></span></a>
                            <ul class='dropdown-menu'>
                              <li><a href='ventasprove.php?nume=".$_SESSION["id"]."'>ver tus ventas </a></li>
                                <li><a href='provecupon.php?nume=".$_SESSION["id"]."'>ver tus ventas sin validar</a></li>
                                 
                            </ul>
                        </li>";
                        } ?>
                       
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
<?php 


	
	$nume=$_GET["nume"];
	$con= new Conexion();
	$query= $con->prepare("SELECT cuponventa.fecha as fechas,idcuponventa,nombre,canti,imagen,monto,codgio,codigoventa FROM productos,cuponventa WHERE usuario_idusuario ='$nume' and idproductos = productos_idproductos and estadoven=1");

	$query ->execute();
	$resultado= $query->fetchAll();

   



 ?>
 <br>
  <br>
  <br>
<div id="venta"></div>
<div class="container">
  <br>
  <br>
  <br>
 

    <div class="row">
    <center><h2>Validar cupones</h2></center>
        <div class="col-md-10 col-md-offset-1">
<div class=" panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Cupones</h3>
                  </div>
                  <div class="col col-xs-6 text-right">

                  <?php  if (verificarpermiso("VER_VENTAS")) {
                           echo "<a class='btn btn-sm btn-primary btn-create' href='provecupon.php?nume=".$_SESSION["id"]."'>actualizar tabla</a>";
                        } ?>
                       
                  </div>
                </div>
              </div>
            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                    <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Cupones</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span>Buscar filtrando</button>
                </div>
            </div>
              <div class="panel-body table-responsive">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                     <tr class="filters">
                        <th style="width: 100px;">CUPONES</th>
                      
                        <th ><input type="text" class="form-control" placeholder="Nombre" disabled ></th>
                        <th><input type="text" class="form-control" placeholder="cantidad" disabled></th>
                         <th><input type="text" class="form-control" placeholder="Precio" disabled></th>
                          <th><input type="text" class="form-control" placeholder="Codigo producto" disabled></th>
                           <th><input type="text" class="form-control" placeholder="Fechas" disabled></th>
                           <th style="width: 180px;"><input type="text" class="form-control" placeholder="Buscar codigo venta" disabled></th>
                           
                       
                    </tr>
                  </thead>
                  <tbody id="myTabl">
                <?php 
if ($resultado) {
  # code...
                foreach ($resultado as $res ) {

    echo "  <tr>
                            <td align='center'>
                              <a class='btn btn-default' onclick='validaventa(".$res['idcuponventa'].");'><em class='fa fa-pencil'></em>validar venta</a>
                              
                            </td>
                         
                            <td>".$res['nombre']."</td>
                            <td>".$res['canti']."</td>
                            <td>$".$res['monto']."</td>
                            <td>".$res['codgio']."</td>
                             <td>".$res['fechas']."</td>
                            <td hidden style='width: 200px;''>".$res['codigoventa']."</td>

                          
                          </tr>";
    # code...
                         }
  
   }
    else{
      echo "<br><br><br><center><h2 style='margin-top: 90px;'>No tienes ventas para validar</h2></center>";
    }
   



  ?>
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



