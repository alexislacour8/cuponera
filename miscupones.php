<?php 

session_start();
require_once "conexiones/verificarpermiso.php";
if (verificarpermiso("COMPRAS")) {
  # code...
include "templei/tuscupones.php";

}
else{
  header("location:index.php");
}



?>
