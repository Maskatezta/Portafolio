<?php 
	$email = $_POST['email'];
	$message =  $_POST['mensaje'];

    $header = 'From: '. $email. "\r\n";
    $header .= "X-Mailer: PHP/". phpversion(). "\r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain";


    $message = "Este mensaje fue enviado por: " . $email . "\r\n";
    $message .= "Mensaje: " . $_POST['mensajee'] . "\r\n"; 
    $message .= "Enviado el: " . date('d/m/Y', time());

    $para  = 'ronaldoa.ojeda@gmail.com';
    $asunto = 'Mensaje del portafolio';

    mail($para, $asunto, utf8_decode($message), $header); 
    echo "Correo enviado";
    header("Location:index.html")
 ?>