<?php
//Gilberto Sebastian Garcia Beltran
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once(__DIR__ . "/../../controllers/torneosController.php");

$objController = new TorneosController();

$id             = $_POST['txtId'];
$nombreTorneo   = $_POST['txtNombreTorneo'];
$organizador    = $_POST['txtOrganizador'];
$patrocinadores = $_POST['txtPatrocinador'];
$sede           = $_POST['txtSede'];
$categoria      = $_POST['txtCategoria'];
$premio1        = $_POST['txtPremio1'];
$premio2        = $_POST['txtPremio2'];
$premio3        = $_POST['txtPremio3'];
$otroPremio     = $_POST['txtOtroPremio'];

$objController->updateTorneo($id, $nombreTorneo, $organizador, $patrocinadores, $sede, $categoria, $premio1, $premio2, $premio3, $otroPremio);

?>
