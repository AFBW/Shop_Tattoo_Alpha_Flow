<?php
$destino = "tattooalphaflow@gmail.com"
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];

$contenido = "nombre" . $nombre . "\n email" . $email . "\n telefono" . $telefono . "\n mensaje" .$mensaje;
mail($destino, "contacto", $contenido);
header ("Location: gracias.html");
?>
