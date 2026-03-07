<?php

require_once 'Usuario.php';

$usuario = new Usuario ("Sebastian Garcia", "gilbertoseba1041@gmail,com");

echo "Nombre: " . $usuario->getNombre() . "<br>";
echo "Correo: " . $usuario->getCorreo();
?>