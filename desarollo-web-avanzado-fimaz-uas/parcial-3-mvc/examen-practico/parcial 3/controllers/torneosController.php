<?php
//Gilberto Sebastian Garcia Beltran
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once(__DIR__ . "/../models/torneosModel.php");

class TorneosController {
    private $model;

    public function __construct()
    {
        $this->model = new TorneosModel();
    }

    public function saveTorneo($nombreTorneo, $organizador, $patrocinadores, $sede, $categoria, $premio1, $premio2, $premio3, $otroPremio, $usuario, $contraseña)
    {
        $id = $this->model->insert($nombreTorneo,$organizador,$patrocinadores,$sede,$categoria,$premio1,$premio2,$premio3,$otroPremio,$usuario,$contraseña);
        return ($id !== false) ? header("Location: admin.php") : header("Location: frmTorneos.php");
        }

    public function readTorneo(){
            return ($this->model->read()) ? $this->model->read() :  false;
    }

    public function readOneTorneo($id){
        return ($this->model->readOne($id) != false) ? $this->model->readOne($id) : header("Location: admin.php");
    }

    public function updateTorneo($id, $nombreTorneo, $organizador, $patrocinadores, $sede, $categoria, $premio1, $premio2, $premio3, $otroPremio){
        return ($this->model->update($id, $nombreTorneo, $organizador, $patrocinadores, $sede, $categoria, $premio1, $premio2, $premio3, $otroPremio)) != false 
            ? header("Location: readOneTorneo.php?id=".$id) 
            : header("Location: frmTorneoUpdate.php?id=".$id);
    }

    public function delete($id){
        return ($this->model->delete($id)) ? header("Location: readAllTorneos.php"): header("Location:readOne.php?id=".$id);
    }
}

?>
