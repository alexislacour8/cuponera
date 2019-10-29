<?php 
require_once "../conexiones/guardardato.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require '../vendor/autoload.php';
if (isset($_POST["usuario"])and isset($_POST["contra"]) and isset($_POST["mail"])) {
  
    $nom=$_POST["usuario"];
    $contra=$_POST["contra"];
    $mails=$_POST["mail"];
    $permi="usuario";
    $hast=md5(time());
 

    $resultado= guardar($nom,$mails,$permi,$contra,$hast);


$mail = new PHPMailer(true);


    //Server settings
    
    $mail->SMTPDebug = 0;                     // Enable verbose debug output
    $mail->isSMTP();                               // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'ofertasaldia07@gmail.com';                     // SMTP username
    $mail->Password   = 'boca1234'; 
    $mail->SMTPSecure = 'tls';                              // SMTP password
          // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('ofertasaldia07@gmail.com','ofertas%');
    $mail->addAddress($mails, $nom);     // Add a recipient
   
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'activacion';
    $mail->Body    = 'hola '.$nom.' activa tu cuenta haciendo click en el link http://localhost/cuponera/acti.php?codigo='.$hast.'';
   
    $mail->send();
 

    if ($resultado) {

    	 echo "<div class='alert alert-danger'>
    <strong>Error!</strong> <a href='#' class='alert-link'>al guardar</a>.
  </div>";
    	# code...
    }
    else{
    	
      echo "<div class='alert alert-success alert-dismissible'>
    <a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>Te has registrado con exito!</strong>recibira un mail para activar
  </div>";
    }

}


else{
  echo "<div class='alert alert-danger'>
    <strong>Error!</strong>por favor completar <a href='#'' class='alert-link'> todos los campos</a>.
  </div>";
}
 ?>

