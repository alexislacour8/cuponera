<?php 
function repetidos($mails)
{
	 Include "conexion.php";
     $con1= new Conexion();
     $query= $con1->prepare("SELECT mail FROM usuario WHERE mail = $mails");
     $query ->execute(array($mails));
	$resultado= $query->fetch();
	
}

 ?>