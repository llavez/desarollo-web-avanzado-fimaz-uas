<?php
//Gilberto Sebastian Garcia Beltran
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once(__DIR__ . "/../../controllers/torneosController.php");
require_once(__DIR__ . "/../admin/template/header.php");

$objTorneosController = new TorneosController();
$rows = $objTorneosController->readTorneo();
?>

<div class="mx-auto p-5">
    <div class="card text-center">
        <div class="card-header">
            <i class="fa-solid fa-trophy"></i> LISTADO DE TORNEOS
        </div>

        <div class="card-body">
            <table class="table table-hover table-bordered">
                <thead class="table-light">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">TORNEO</th>
                        <th scope="col">ORGANIZADOR</th>
                        <th scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($rows): ?>
                        <?php foreach ($rows as $row): ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['nombreTorneo']; ?></td>
                                <td><?php echo $row['organizador']; ?></td>
                                <td>
                                    <a href="readOneTorneo.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">
                                        <i class="fa-solid fa-list"></i>
                                    </a>
                                    <a href="updateTorneo.php?id=<?php echo $row['id']; ?>" class="btn btn-success">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal<?php echo $row['id']; ?>">
                                        <i class="fa-solid fa-delete-left"></i>
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="modal<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="modalLabel<?php echo $row['id']; ?>" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="modalLabel<?php echo $row['id']; ?>">
                                                        ¿Deseas eliminar el torneo?
                                                    </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Esta acción no se puede deshacer...
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                    <a href="deleteTorneo.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Eliminar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4" class="text-center">
                                No hay torneos
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="mc-auto p-2">
        <a href="admin.php" class="btn btn-primary">REGRESAR</a>
    </div>
</div>

<?php
require_once(__DIR__ . "/../admin/template/footer.php");
?>
