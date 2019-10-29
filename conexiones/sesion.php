<?php 

function iniciar_sesion($log,$pass)
{
	Include "conexion.php";
	$con= new Conexion();
	$query= $con->prepare("SELECT nombre ,tipousuario,idusuario FROM usuario WHERE mail = ? and contrasena=? and estado = '' ");

	$query ->execute(array($log,$pass));
	$resultado= $query->fetch();
	
    
     if ($resultado > 0) {
    $data=$resultado;
     session_start();
     $_SESSION["active"]=true;
     $_SESSION["user"]=$_POST["user"];
    $_SESSION["id"]=$data["idusuario"];
    $_SESSION["permiso"]=$data["tipousuario"];
     $_SESSION["nombres"]=$data["nombre"];
    
       return true;
        
    }
    else{
    	return false;
    }

}

 ?>