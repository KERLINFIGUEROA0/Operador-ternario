<?php
$largo = readline("Ingrese el largo del terreno en metros: ");
$ancho = readline("Ingrese el ancho del terreno en metros: ");

$area = $largo * $ancho;
$tipocultivo = $area >= 1000 ? "cultivos extensivos" : "cultivos de jardin o huerto";

echo "El terreno es adecuado para " . $tipocultivo . ".";
?>