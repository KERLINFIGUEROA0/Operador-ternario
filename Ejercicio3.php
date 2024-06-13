<?php
$edad = readline("Ingresa tu edad: ");

$mensaje = ($edad >= 18) 
? (readline("¿Tienes licencia de conducir? (si/no): ") === "si" ? "Puedes conducir" : "Debes obtener una licencia de conducir primero") : "No puedes conducir";
echo $mensaje;
?>