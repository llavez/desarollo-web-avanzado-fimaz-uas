<?php
require_once "clases/Admin.php";
require_once "clases/Alumno.php";

try {
    $admin = new Admin("Ines", "ines@gmail.com");
    echo $admin->getNombre() . " - " . $admin->getRol() . "<br>";

    $alumno = new Alumno("Sebastian", "sebastian@hotmail.com", "A12345");
    echo $alumno->getNombre() . " - " . $alumno->getRol() . " - Matricula: " . $alumno->getMatricula() . "<br>";

    $usuarioInvalido = new Alumno("Maria", "correo_invalido", "B67890");
    echo $usuarioInvalido->getNombre();
} catch (Exception $e) {
    echo "Error controlado: ". $e->getMessage();
}