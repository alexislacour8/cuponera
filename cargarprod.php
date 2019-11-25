<?php 
session_start();
require_once "conexiones/verificarpermiso.php";
if (verificarpermiso("CARGAR_CUPON")) {
  # code...
include "templei/produc.php";

}
else{
  header("location:index.php");
}


 ?>



