<?php 
session_start();
require_once "conexiones/verificarpermiso.php";
if (verificarpermiso("EDITAR_ELIMINAR")) {
  # code...
include "templei/editprod.php";

}
else{
  header("location:index.php");
}


 ?>




