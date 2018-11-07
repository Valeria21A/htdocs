<?php

require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$correo = $_POST['email'];
$mensaje = $_POST['message'];
$nombre = $_POST['name'];

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'vale79211@gmail.com';                 // SMTP username
$mail->Password = 'Valeria1234..';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('vale79211@gmail.com', 'Mailer');
$mail->addAddress($correo, $nombre);     

$mail->Subject = 'Aqui va el Asunto';
$mail->Body    = $mensaje;

if(!$mail->send()) {
    echo 'Error, mensaje no enviado';
    echo 'Error del mensaje: ' . $mail->ErrorInfo;
} else {
    echo 'El mensaje se ha enviado correctamente';
    
}