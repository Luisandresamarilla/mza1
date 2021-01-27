<?php
$contacto=$_POST['nombre'];
$email=$_POST['email'];
$mensaje=$_POST['mensaje'];

$para="info@alvearalquila.online";
$asunto="Nuevo Mensaje de $nombre";

$mensaje="
	Nombre del Remitente:".$nombre."
	Correo: ".$email."
	Mensaje: ".$mensaje."
";

mail($para,$asunto,utf8_decode($mensaje));
header ("location: indexform.html")
 ?>
