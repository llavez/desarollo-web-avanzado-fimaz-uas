<?php
//Gilberto Sebastian Garcia Beltran
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once(__DIR__ . "/../../controllers/torneosController.php");

$objTorneosController = new TorneosController();
$objTorneosController->delete($_GET['id']);
?>
