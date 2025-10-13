<?php

$titulo="Administración de Netflix";

include_once "template/head.admin.php";
include_once "template/header.admin.php";
include_once "template/aside.admin.php";
$tituloSeccion="Resumen";
include_once "template/main.header.admin.php";
$peliculas=[
    ["titulo"=>"Titanic","director"=>"James Cameron","duracion"=>190],
    ["titulo"=>"Torrente","director"=>"Santiago Segura","duracion"=>100],
    ["titulo"=>"Avatar","director"=>"James Cameron","duracion"=>167]
    ]
?>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Título</th>
        <th scope="col">Director</th>
        <th scope="col">Duración</th>
    </tr>
    </thead>
    <tbody>
    <?php
    for($i=0;$i<count($peliculas);$i++){
        echo "<tr><th scope='row'>".($i+1)."</th>";
        echo "<td>".$peliculas[$i]["titulo"]."</td>";
        echo "<td>".$peliculas[$i]["director"]."</td>";
        echo "<td>".$peliculas[$i]["duracion"]."</td>";
        echo "</tr>";
    }

    ?>
    </tbody>
</table>


<?php

include_once "template/footer.admin.php";
