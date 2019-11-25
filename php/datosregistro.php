<?php 
require_once "../conexiones/guardardato.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require '../vendor1/autoload.php';
if (isset($_POST["usuario"])and isset($_POST["contra"]) and isset($_POST["mail"])) {
    $nom=$_POST["usuario"];
    $contra=$_POST["contra"];
    $mails=$_POST["mail"];
    $permi= 2;
    $hast=md5(time());
   
   
if ( repetidos($mails)) {
 
   echo "<div class='alert alert-danger'>
    <strong>Error!</strong> <a href='#' class='alert-link'>ya se ha registrado</a>.
  </div>";
    }
else {

      require_once "mail.php";
     guardar($nom,$mails,$permi,$contra,$hast);
      echo "<div class='alert alert-success alert-dismissible'>
    <a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>Te has registrado con exito!</strong> recibiras un mail para activar tu cuenta
  </div>";
    }
   

}


else{
  echo "<div class='alert alert-danger'>
    <strong>Error!</strong>por favor completar <a href='#'' class='alert-link'> todos los campos</a>.
  </div>";
}
 ?>

