<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$Mensaje = $_POST['Mensaje'];

//Enviar correo
$destinatario = "heladosviajeros19@gmail.com";
$asunto = "Contacto desde nuestra web";

$carta = "De: $nombre \n";
$carta = "Correo: $email \n";
$carta = "Mensaje: $Mensaje \n";

mail($destinatario, $asunto, $carta);

if ($carta) {
    header('Location:mensaje-de-envio.php');
}else {
    header('Location:mensaje-de-envio2.php');
}

?>