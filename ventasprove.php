
<?php 
session_start();
require_once "conexiones/verificarpermiso.php";
if (verificarpermiso("VER_VENTAS")) {
  # code...
include "templei/cuponventa.php";

}
else{
  header("location:index.php");
}


 ?>
