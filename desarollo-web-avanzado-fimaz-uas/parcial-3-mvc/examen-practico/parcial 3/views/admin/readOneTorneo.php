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
        INFORMACION DEL TORNEO
    </div>

    <div class="card-body">
        <form action="torneosInsert.php" method="post">
            <div class="mb-3">
                <label for="nombreTorneo" class="form-label">NOMBRE DEL TORNEO (ID: <?php echo $lstTorneo['id']; ?>)</label>
                <input type="text" name="txtNombreTorneo" id="nombreTorneo" class="form-control" value="<?php echo $lstTorneo['nombreTorneo']; ?>" readonly>
            </div>

            <div class="mb-3">
                <label for="organizador" class="form-label">ORGANIZADOR (nombre completo)</label>
                <input type="text" name="txtOrganizador" id="organizador" class="form-control" value="<?php echo $lstTorneo['organizador']; ?>" readonly>
            </div>

            <div class="mb-3">
                <label for="patrocinador" class="form-label">PATROCINADOR(ES)</label>
                <textarea name="txtPatrocinador" id="patrocinador" cols="30" rows="3" class="form-control" readonly> <?php echo $lstTorneo['patrocinadores']; ?></textarea>
                <small class="form-text text-muted">
                    Se puede separar con "," si hay más de un patrocinador
                </small>
            </div>

            <div class="row">
                <div class="col mb-3">
                    <label for="sede" class="form-label">SEDE (cancha)</label>
                    <input type="text" name="txtSede" id="sede" class="form-control" value="<?php echo $lstTorneo['sede']; ?>" readonly>
                </div>
                <div class="col mb-3">
                    <label for="categoria" class="form-label">CATEGORÍA</label>
                    <input list="lstCategorias" name="txtCategoria" id="categoria" class="form-control" value="<?php echo $lstTorneo['categoria']; ?>" readonly>
                </div>
            </div>

            <div class="row">
                <div class="col mb-3">
                    <label for="premio1" class="form-label">PREMIO 1ER. LUGAR</label>
                    <input type="text" name="txtPremio1" id="premio1" class="form-control" value="<?php echo $lstTorneo['premio1']; ?>" readonly>
                </div>
                <div class="col mb-3">
                    <label for="premio2" class="form-label">PREMIO 2DO. LUGAR</label>
                    <input type="text" name="txtPremio2" id="premio2" class="form-control" value="<?php echo $lstTorneo['premio2']; ?>" readonly>
                </div>
            </div>

            <div class="row">
                <div class="col mb-3">
                    <label for="premio3" class="form-label">PREMIO 3ER. LUGAR</label>
                    <input type="text" name="txtPremio3" id="premio3" class="form-control" value="<?php echo $lstTorneo['premio3']; ?>" readonly>
                </div>
                <div class="col mb-3">
                    <label for="otroPremio" class="form-label">OTRO PREMIO</label>
                    <input type="text" name="txtOtroPremio" id="otroPremio" class="form-control" value="<?php echo $lstTorneo['otroPremio']; ?>" readonly>
                </div>
            </div>

            <div class="row">
                <div class="col mb-3">
                    <label for="usuario" class="form-label">USUARIO</label>
                    <input type="text" name="txtUsuario" id="usuario" class="form-control" value="<?php echo $lstTorneo['usuario']; ?>" readonly>
                </div>
                <div class="col mb-3">
                    <label for="contraseña" class="form-label">CONTRASEÑA</label>
                    <input type="text" name="txtContraseña" id="contraseña" class="form-control" value="<?php echo $lstTorneo['contraseña']; ?>" readonly>
                </div>
            </div>
            <div class="col-12">
                <a href="readAllTorneos.php" class="btn btn-success">REGRESAR</a>
            </div>
        </form>
    </div>

    <div class="card-footer text-center text-body-secondary">
        FORMULARIO PARA REGISTRAR TORNEOS
    </div>
</div>
    </div>

<?php
require_once(__DIR__ . "/../admin/template/footer.php");
?>
