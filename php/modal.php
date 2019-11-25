<link rel="stylesheet" type="text/css" href="stylos/valida.css">
<script type="text/javascript" src="js/ventacupon.js"></script>
<?php 
session_start();
include '../conexiones/conexion.php';
require_once "../conexiones/verificarpermiso.php";
$producto=$_POST['producto'];
$cant=$_POST['cantidad'];
$precio=$_POST['precio'];
$id=$_POST['id'];
  $con= new Conexion();
  $query= $con->prepare("select productos.nombre as pro,tipo ,precio,cantidad,fecha,imagen,localidad,provincia,direccion,idproductos from productos,usuario,subcategoria where idproductos='$id' and idusuario =usuario_idusuario and idcategoria=categoria_idcategoria");

  $query ->execute();
  $resultado= $query->fetchAll();
                 
              if (verificarpermiso("COMPRAS")) {
                foreach ($resultado as $res) {
                  # code...
                if($cant > 0){
                  echo "<div class='row'>
                    <div class='col-md-6 product_img'>
                        <img class='img-responsive' src=".$res['imagen'].">
                        <br>
                         <div class='product-rating'>Ubicacion</div>
                
              <div class='product-rating'>Provincia: ".$res['provincia']."</div>
          <div class='product-rating'>Localidad: ".$res['localidad']."</div>
          <div class='product-rating'>Direccion: ".$res['direccion']."</div>

                    </div>
                    <div class='col-md-6 product_content'>
                        <h4><span>".$producto."</span></h4>
                        <div class='rating'>
                            <span class='glyphicon glyphicon-star'></span>
                            <span class='glyphicon glyphicon-star'></span>
                            <span class='glyphicon glyphicon-star'></span>
                            <span class='glyphicon glyphicon-star'></span>
                            <span class='glyphicon glyphicon-star'></span>
                        </div>
                        <p> luego de la compra tendra su cupon en mis cupones indicando todos los datos del proveedor que se en contraran en el cupon  mas el codigo de cupon para canjearlo el pago se realiza con el proveedor</p>
                        <h3 class='cost'><span class='glyphicon glyphicon-usd'></span><small class='pre-cost'></small>".$precio*$cant."</h3>
                        <div class='row'>
                            <div class='col-lg-12'>
                            unidades
                                <p>".$cant."</p>
                            </div>
                       
                           

                           
                           <br>
                            </div>
                            <!-- end col -->
                        </div>
                        <div id='restulta'></div>
                       <div class='col-lg-12'>
                       <form action='php/venta.php' method='POST'>
                      
                        <input class='hidden' value='".$id."' id='id' name='id'>
                       <input class='hidden' value='".$_SESSION["id"]."' id='idusuario' name='idusuario'>
                       <input class='hidden' value='".$precio*$cant."' id='precio' name='precio'>
                        <input class='hidden' value='".$cant."' id='cantidad' name='cantidad'>
                        <input type='text' class='hidden' value='".$cant."' id='fecha' name='fecha'>
                        
                        <div class='btn-ground col-lg-12'>
                            <button  class='btn btn-primary' id='botone'><span class='glyphicon glyphicon-shopping-cart'></span>Confirmar Comprar</button>
                          </form>
                        </div>
                        </div>
                          <br>
                    </div>
                </div>
               ";
             }
             else 
              echo "lo sentimos este articulo se encuentra fuera de stock";
             }
          }

              elseif (isset($_SESSION['user'])) {
               echo "Lo sentimos no eres usuario cliente para comprar";
              }
              else
              {
                echo "Lo sentimos para realizar compras tienes que estar logeado
                <a href='login.php'><button type='button' class='btn btn-primary'></span>Iniciar sesion</button></a><br><br>Si no estas registrado registrate aqui no lo dudes hacelo ahora <a href='registro.php'><button type='button' class='btn btn-primary'></span>Registrate</button></a><br> Comenza a buscar las mejores ofertas ya no lo dudes!!! ";
              }
                


 ?>
