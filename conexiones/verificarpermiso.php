<?php 

function verificarpermiso($funcionalidad)
{
	include_once "conexion.php";
    $con= new Conexion();
  if(isset($_SESSION["permiso"])){
	$permisos=$_SESSION["permiso"];
	for ($i=0; $i < count($permisos)-1; $i++) { 
		$idpermisos=$permisos[$i];
		$query= $con->prepare("SELECT tipo FROM permisos WHERE idpermisos = ? ");
		 $query ->execute(array($idpermisos));
    	$resultado= $query->fetch();

    	if ($resultado['tipo'] == $funcionalidad) {
    		
    		return true;
    		break ;

    		
    	}

	}
}
	return false;
}



 ?>