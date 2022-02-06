<?php
$name = $_POST['name'];
$email = $_POST['email'];
//$input = $_POST['input'];

$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su e-mail es: " . $email . " \r\n";
$message .= "Mensaje: " . $_POST['input'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'candegdy@gmail.com';
$asunto = 'Portfolio contacto';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");
?>