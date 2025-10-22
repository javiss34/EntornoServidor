<?php

$titulo="Administración de Tesla";

include_once "template/head.admin.php";
include_once "template/header.admin.php";
include_once "template/aside.admin.php";
$tituloSeccion="Resumen";
include_once "template/main.header.admin.php";
$coches = [
        ["modelo" => "Model S", "color" => "Rojo", "velocidad_max" => 322],
        ["modelo" => "Model 3", "color" => "Blanco", "velocidad_max" => 261],
        ["modelo" => "Model X", "color" => "Negro", "velocidad_max" => 250],
        ["modelo" => "Model Y", "color" => "Azul", "velocidad_max" => 217]
];


?>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">modelo</th>
        <th scope="col">color</th>
        <th scope="col">velocidad máxima</th>
    </tr>
    </thead>
    <tbody>
    <?php
    for($i=0;$i<count($coches);$i++){
        echo "<tr><th scope='row'>".($i+1)."</th>";
        echo "<td>".$coches[$i]["modelo"]."</td>";
        echo "<td>".$coches[$i]["color"]."</td>";
        echo "<td>".$coches[$i]["velocidad_max"]."</td>";
        echo "</tr>";
    }

    ?>
    </tbody>
</table>


<?php

include_once "template/footer.admin.php";
