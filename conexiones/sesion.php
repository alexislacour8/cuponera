<?php 

function iniciar_sesion($log,$pass)
{
	Include "conexion.php";
	$con= new Conexion();
	$query= $con->prepare("SELECT nombre ,tipousuario,idusuario FROM usuario WHERE mail = ? and contrasena=? and estado = '' ");
     $query ->execute(array($log,$pass));
    $resultado= $query->fetch();
   $idroles=$resultado['tipousuario'];
$con2= new Conexion();
    $query2= $con2->prepare("SELECT permisos FROM roles WHERE idroles = ? ");
	   $query2->execute(array($idroles));
	$resultado2= $query2->fetch();
	
    
     if ($resultado > 0) {
    $data=$resultado;

     session_start();
     $_SESSION["active"]=true;
     $_SESSION["user"]=$_POST["user"];
    $_SESSION["id"]=$data["idusuario"];
    $array=$resultado2["permisos"];
    $permisos=explode(",", $array);
    $_SESSION["permiso"]=$permisos;
     $_SESSION["nombres"]=$data["nombre"];
    
       return true;
        
    }
    else{
    	return false;
    }

}

 ?>