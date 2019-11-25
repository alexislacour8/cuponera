<?php 
session_start();
require_once "conexiones/verificarpermiso.php";
if (verificarpermiso("CARGAR_PROVEEDOR")) {
  # code...
include "templei/prove.php";

}
else{
  header("location:index.php");
}


 ?>



