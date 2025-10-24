<?php

$titulo="Administración de coches";

include_once "template/head.admin.php";
include_once "template/header.admin.php";
include_once "template/aside.admin.php";

$tituloSeccion="Añadir un coche";
include_once "template/main.header.admin.php";

?>

    <form method="post" action="/car" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="formControlModelo" class="form-label">Modelo Coche</label>
            <input type="text" class="form-control" id="formControlModelo" name="modelo">
        </div>
        <div class="mb-3">
            <label for="exampleColorInput" class="form-label">Color</label>
            <input type="color" class="form-control-color" id="exampleColorInput" name="color" value="#fffff" title="Elige tu color">
        </div>
        <div class="mb-3">
            <label for="formControlVelocidadMax" class="form-label">Velocidad Máxima</label>
            <input class="form-control" id="formControlColor" name="velocidad-max">
        </div>
        <div class="mb-3">
            <label for="formControlAutopiloto" class="form-label">Autopiloto</label>
            <div class="form-check">
                <input class="form-check-input" name="autopilotoOptions" type="radio" value="si" id="checksi">
                <label class="form-check-label" for="checkSi">
                Si
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" name="autopilotoOptions" type="radio" value="no" id="checkNo" checked>
                <label class="form-check-label" for="checkNo">
                    No
                </label>
            </div>
        </div>
        <div class="mb-3">
            <div class="input-group mb-3">
                <input type="file" class="form-control" id="inputGroupImagen" name="imagen">
                <label class="input-group-text" for="inputGroupImagen">Upload</label>
            </div>
        </div>

        <div class="mb-3">
            <input type="submit" value="Enviar" class="btn btn-primary">
        </div>
    </form>

<?php

include_once "template/footer.admin.php";
