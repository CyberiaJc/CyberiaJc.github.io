


<?php


$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$mensajes = $_POST['mensaje'];





$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . "\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $mensajes. " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'tupas49@gmail.com';
$asunto = 'Portafolio';

mail($para, $asunto, utf8_encode(utf8_decode($mensaje)), $header);

echo "<script>alert('Formulario enviado');window.location.href='Thanks.html';</script>";





?>




