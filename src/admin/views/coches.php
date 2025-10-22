<?php

$titulo="Administración de coches";

include_once "template/head.admin.php";
include_once "template/header.admin.php";
include_once "template/aside.admin.php";
$tituloSeccion="Coches";
include_once "template/main.header.admin.php";
$coches = [
        ["modelo" => "Model S", "color" => "Rojo", "velocidad_max" => 322],
        ["modelo" => "Model 3", "color" => "Blanco", "velocidad_max" => 261],
        ["modelo" => "Model X", "color" => "Negro", "velocidad_max" => 250],
        ["modelo" => "Model Y", "color" => "Azul", "velocidad_max" => 217]
];


?>


<?php

include_once "template/footer.admin.php";
