<?php session_start();
require_once "conexiones/verificarpermiso.php";
include 'conexiones/conexion.php';
$id=$_GET['id'];

$con= new Conexion();
  $query= $con->prepare("select productos.nombre as pro,tipo ,precio,cantidad,fecha,imagen,localidad,provincia,idproductos from productos,usuario,subcategoria where idproductos='$id' and idusuario =usuario_idusuario and idcategoria=categoria_idcategoria");
  $query ->execute();
  $resultado= $query->fetchAll();



?>
<meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css">

 <link rel="stylesheet" type="text/css" href="stylos/stylos.css">
 <link rel="stylesheet" type="text/css" href="stylos/propagandas.css">
 
 
 <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="js/modal.js"></script>


<!-- If you're using Stripe for payments -->


  <script src="bootstrap/bootstrap.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
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
<?php 
foreach ($resultado as $res) {

 echo "<div class='container-fluid'>
    <div class='content-wrapper'> 
    <div class='item-container'>  
      <div class='container'> 
        <div class='col-md-12 col-xs-12'>
          <div class='product col-md-8 col-xs-12 service-image-left'>
                    
         
              <img id='item-display' class='imac' src=".$res['imagen']."></img>
    
          </div>
          
          <div class='container service1-items col-sm-4 col-md-4 pull-left'>
            <center>
              <a id='item-1' class='service1-item'>
                <img src=".$res['imagen']." >
              </a>
              <a id='item-2' class='service1-item'>
                <img src=".$res['imagen'].">
              </a>
              <a id='item-3' class='service1-item'>
                <img src=".$res['imagen']." ></img>
              </a>
            </center>
          </div>
        </div>
        <br>
          
        <div class='col-md-7 marge'>
          <div class='product-title'>".$res['pro']."</div>
          <br>
           <div class='product-title'>".$res['tipo']."</div>
          <br>
          <div class='product-desc'>4 gb de ram  64 memoria interna conexion 4g</div>
           <br>
           <div class='product-rating'>Provincia: ".$res['provincia']."</div>
          <div class='product-rating'>Localidad: ".$res['localidad']."</div>
          <hr>
          <form action='return false' onsubmit='return false'>
          <input class='hidden' value='".$res['pro']."' id='producto'>
           <input class='hidden' value='".$res['precio']."' id='precio'>
            <input class='hidden' value='".$res['idproductos']."' id='id'>
          <div class='product-price'>$ ".$res['precio']."</div>
          <div class='product-stock'>";
                                if (verificarpermiso("COMPRAS")) {
                                  if ($res['cantidad'] > 0) {
                                    # code...
                                  
                                  echo "<p>Disponibles</p><select class='form-control' name='select' id='cantidad'>";

                                for($x=1;$x<($res['cantidad'])+1;$x++){
                                 
                                    if ($x==1) {
                                     echo "<option value='".$x."''>".$x."</option>";
                                    }
                                  else{
                                   echo "<option value='".$x."'' >".$x."</option>";
                                 }
                                     }
                                 
                                   
                                    echo "</select>";
                                  }
                                  else{
                                    echo "<h4>stock ".$res['cantidad']."</h4>";
                                  }
                              }
                              else{
                                   echo "<h4>stock ".$res['cantidad']."</h4>";
                              }
                            
                              echo "
                               </div>
          
          <hr>
          <div class='btn-group cart'>
            <button type='submit' id='botones' class='btn btn-success' data-toggle='modal' data-target='#product_view'>
            Comprar
            </button>
            <form>
          </div>
         
        </div>
      </div> 
    </div>
    <div class='container-fluid'>   
      <div class='col-md-12 product-info'>
          <ul id='myTab' class='nav nav-tabs nav_tabs'>
            
            <li class='active'><a href='#service-one' data-toggle='tab'>DESCRIPCIÓN</a></li>
         
           
            
          </ul>
        <div id='myTabContent' class='tab-content'>
            <div class='tab-pane fade in active' id='service-one'>
             
              <section class='container product-info'>
               <h2>".$res['pro']."</h2>
                <div>
               <h3>Resumen</h3>
               <p>info del articulo</p>
               <p>$".$res['precio']."</p>
               <p>Oferta valida hasta el ".$res['fecha']."</p>
               <div class='product-rating'>Ubicacion</div>
              <div class='product-rating'>Provincia: ".$res['provincia']."</div>
          <div class='product-rating'>Localidad: ".$res['localidad']."</div>
               <br>
                </div>
               <center><img id='item-display' src=".$res['imagen']." class='imc col-md-12 col-xs-12'></center>
               <br>
                <br>
                  <div class='product-rating'>Como comprar</div>
               <p class='col-md-8 col-lg-8'>Luego de hacer click en ¡Compra! vas a poder seleccionar tu dirección de envío.
                  Recibirás notificaciones por mail dentro de las primeras 48 horas indicando el estado de tu envío e instrucciones.
                  Para consultas de cambios o devoluciones podés encontrar las condiciones aquí
                  El vencimiento del cupón no es motivo de devolución
                  Ver términos y condiciones que aplican a los Groupones de productos.
                  Ver condiciones que aplican a todos los Groupones.</p>
              </section>
                      
            </div>
          <div class='tab-pane fade' id='service-two'>
            
            <section class='container'>
                
            </section>
            
          </div>
          <div class='tab-pane fade' id='service-three'>
                        
          </div>
        </div>
        <hr>
      </div>
    </div>
  </div>
</div>";
}


 ?>

 <div class="modal fade product_view" id="product_view">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                <h3 class="modal-title">Desea realizar la compra</h3>
            </div>
            <div class="modal-body">
             <div id="resultados">
   
             </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/1.2.3/jquery.payment.min.js"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

