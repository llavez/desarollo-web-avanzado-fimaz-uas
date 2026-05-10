<?php
//Gilberto Sebastian Garcia Beltran
require_once("../admin/template/header.php");
?>
<div class="mx-auto p-5">
<div class="card text-center">
  <div class="card-header">
    MENU
  </div>
  <div class="card-body">
    <h5 class="card-title"></h5>
        <div class="row mb-3">
            <div class="col">
                <div class="card text-center">
                <div class="card-header">
                    CREAR TORNEO
                </div>
                <div class="card-body">

                <a href="frmtorneos.php" class="btn btn-primary">
                    <img src="../img/torneo-admin.webp" alta="Crear un torneo" width="180" height="180">
                </a>

                </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                <div class="card-header">
                    LISTADO DE TORNEO
                </div>
                <div class="card-body">
                    
                <a href="readAllTorneos.php" class="btn btn-primary">
                    <img src="../img/lista-torneos-admin.jpg" alta="Listar torneos" width="180" height="180">
                </a>


            </div>
            </div>
        </div>
    </div>
    <div class="row">
            <div class="col">
                <div class="card text-center">
                <div class="card-header">
                    ESTADISTICAS
                </div>
                <div class="card-body">


                </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                <div class="card-header">
                    ANUNCIOS
                </div>
                <div class="card-body">
            </div>
            </div>
        </div>
    </div>
</div>
   <div class="card-footer text-body-secondary">
     Configuracion de torneo. Web App Basket-Ball
   </div>
   </div>
</div>

<?php
require_once("../admin/template/footer.php");
?>