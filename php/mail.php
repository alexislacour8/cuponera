<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require '../vendor/autoload.php';
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
    $mail->Body    = 'hola '.$nom.' activa tu cuenta haciendo click en el link http://localhost/cuponera/acti.php?codigo='.$hast.'<br><br><img style=width:500px; src=https://cdn.needish.com/is-prod-campaigns/FoNeFkbXVJjq39VW2o3_lA><h2>Ofertas al dia</h2>';
   
    $mail->send();


 ?>