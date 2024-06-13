<?php
$cantidad = readline("ingrese la cantidad total de artículos comprados: ");
$preciounitario = readline("ingrese el precio unitario de cada artículo: ");

$subtotal = $cantidad * $preciounitario;

$descuento = $cantidad >= 10 ? 0.10 : 0;

$valordescuento = $subtotal * $descuento;

$totalcondescuento = $subtotal * (1 - $descuento);

echo "subtotal: $" . $subtotal . "\n";
echo "descuento: $" . $valordescuento . "\n";
echo "el total a pagar es: $" . $totalcondescuento;
?>
