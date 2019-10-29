<?php 
 
 require_once "../conexiones/sesion.php";
  if (isset($_POST["user"]) and isset($_POST["pass"])) {
      $log= $_POST["user"];
      $pass= $_POST["pass"];

  $resultado= iniciar_sesion($log,$pass);
  if ($resultado) {
    echo "logeado";
      # code...
  }
  else{
    	
        echo "<div class='alert alert-danger'>
    <strong>Error!</strong>sin activar mail o <a href='#'' class='alert-link'>contraseña incorrecta</a>.
  </div>";
        } 
}
else{

        echo "<div class='alert alert-danger'>
    <strong>Error!</strong> <a href='#'' class='alert-link'>faltan datos</a>.
  </div>";
  }
?>