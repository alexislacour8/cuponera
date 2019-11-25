<?php 

session_start();
require_once "conexiones/verificarpermiso.php";
if (verificarpermiso("COMPRAS")) {
  # code...
include "templei/cuponescange.php";

}
else{
  header("location:index.php");
}



?>
