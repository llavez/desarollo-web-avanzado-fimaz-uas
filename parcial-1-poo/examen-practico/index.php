<?php
require_once 'clases/Admin.php';
require_once 'clases/Alumno.php';

$usuarios = [];

try {
    $usuarios [] = new Admin("Ines Gil", "ines.admin@uas.edu.mx");
    $usuarios [] = new Alumno("Sebastian Garcia", "sebastian@uas.edu.mx", "A12345");

    // Este lanza excepción y NO se agrega al arreglo
    $usuarios[] = new Alumno("Error", "Correo-invalido", "B6789");

} catch (Exception $e) {
    echo "Error controlado: " . $e->getMessage();
}

echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr><th>Nombre</th><th>Correo</th><th>Rol</th><th>Matricula</th></tr>";

foreach ($usuarios as $usuario) {
    echo "<tr>";
    echo "<td>" . $usuario->getNombre() . "</td>";
    echo "<td>" . $usuario->getCorreo() . "</td>";
    echo "<td>" . $usuario->getRol() . "</td>";

    echo "<td>";
    echo method_exists($usuario, 'getMatricula') ? $usuario->getMatricula() : "—";
    echo "</td>";

    echo "</tr>";
}

echo "</table>";
?>

