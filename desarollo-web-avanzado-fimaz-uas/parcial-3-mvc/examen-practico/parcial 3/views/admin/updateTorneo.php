<?php
//Gilberto Sebastian Garcia Beltran
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once(__DIR__ . "/../../controllers/torneosController.php");
require_once(__DIR__ . "/../admin/template/header.php");

$objTorneosController = new TorneosController();
$lstTorneo = $objTorneosController->readOneTorneo($_GET['id']);
?>

<div class="mx-auto p-5">
    <div class="card">
        <div class="card-header text-center">
            INFORMACIÓN DEL TORNEO
        </div>

        <div class="card-body">
            <form action="torneoUpdate.php" method="post">
                <input type="hidden" name="txtId" value="<?php echo $lstTorneo['id']; ?>">

                <div class="mb-3">
                    <label for="nombreTorneo" class="form-label">NOMBRE DEL TORNEO</label>
                    <input type="text" name="txtNombreTorneo" id="nombreTorneo" class="form-control" 
                           value="<?php echo $lstTorneo['nombreTorneo']; ?>">
                </div>

                <div class="mb-3">
                    <label for="organizador" class="form-label">ORGANIZADOR (nombre completo)</label>
                    <input type="text" name="txtOrganizador" id="organizador" class="form-control" 
                           value="<?php echo $lstTorneo['organizador']; ?>">
                </div>

                <div class="mb-3">
                    <label for="patrocinador" class="form-label">PATROCINADOR(ES)</label>
                    <textarea name="txtPatrocinador" id="patrocinador" cols="30" rows="3" class="form-control"><?php echo $lstTorneo['patrocinadores']; ?></textarea>
                    <small class="form-text text-muted">
                        Se puede separar con "," si hay más de un patrocinador
                    </small>
                </div>

                <div class="row">
                    <div class="col mb-3">
                        <label for="sede" class="form-label">SEDE (cancha)</label>
                        <input type="text" name="txtSede" id="sede" class="form-control" 
                               value="<?php echo $lstTorneo['sede']; ?>">
                    </div>
                    <div class="col mb-3">
                        <label for="categoria" class="form-label">CATEGORÍA</label>
                        <input list="lstCategorias" name="txtCategoria" id="categoria" class="form-control" 
                               value="<?php echo $lstTorneo['categoria']; ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col mb-3">
                        <label for="premio1" class="form-label">PREMIO 1ER. LUGAR</label>
                        <input type="text" name="txtPremio1" id="premio1" class="form-control" 
                               value="<?php echo $lstTorneo['premio1']; ?>">
                    </div>
                    <div class="col mb-3">
                        <label for="premio2" class="form-label">PREMIO 2DO. LUGAR</label>
                        <input type="text" name="txtPremio2" id="premio2" class="form-control" 
                               value="<?php echo $lstTorneo['premio2']; ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col mb-3">
                        <label for="premio3" class="form-label">PREMIO 3ER. LUGAR</label>
                        <input type="text" name="txtPremio3" id="premio3" class="form-control" 
                               value="<?php echo $lstTorneo['premio3']; ?>">
                    </div>
                    <div class="col mb-3">
                        <label for="otroPremio" class="form-label">OTRO PREMIO</label>
                        <input type="text" name="txtOtroPremio" id="otroPremio" class="form-control" 
                               value="<?php echo $lstTorneo['otroPremio']; ?>">
                    </div>
                </div>

                <div class="mb-3 text-center">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a href="readAllTorneos.php" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>

        <div class="card-footer text-center text-body-secondary">
            FORMULARIO PARA ACTUALIZAR TORNEOS
        </div>
    </div>
</div>

<?php
require_once(__DIR__ . "/../admin/template/footer.php");
?>
