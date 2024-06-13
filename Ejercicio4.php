<?php
$estacion = readline("Ingrese la estación del año (primavera, verano, otoño, invierno): ");

$siembra = ($estacion === "invierno" || $estacion === "abril" || $estacion === "mayo" || $estacion === "junio" || $estacion === "julio" || $estacion === "agosto" || $estacion === "septiembre" && $estacion === "octubre" && $estacion === "noviembre") ? "siembra en almacigo" : "siembra directa";

echo "Para la estación de $estacion  se recomienda utilizar $siembra.";
?>
 