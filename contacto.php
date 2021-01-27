<?php
$contacto=$_POST['nombre'];
$email=$_POST['email'];
$mensaje=$_POST['mensaje'];

$para="flopydepapi@gmail.com";
$asunto="Nuevo Mensaje de $nombre";

$mensaje="
	Nombre del Remitente:".$nombre."
	Correo: ".$email."
	Mensaje: ".$mensaje."
";

mail($para,$asunto,utf8_decode($mensaje));
header ("location: indexform.html")
 ?>
