<?php
require_once 'Admin.php';

$admin = new Admin("Sebastian Garcia", "gilbertoseba1041@gmail.com");

echo "Nombre: " . $admin->getNombre() . "<br>";
echo "Correo: " . $admin->getCorreo() . "<br>";
echo "Rol: " . $admin->getRol();
?>