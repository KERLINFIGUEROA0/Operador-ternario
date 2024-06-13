<?php
$cantidad = readline("ingrese el numero de camisas que  desea comprar: ");
$preciocamisa = readline("ingrese el precio  unitario por camisa: ");

$subtotal = $cantidad * $preciocamisa;

$descuento = $cantidad >= 3 ? 0.20 : 0.10;

$valordescuento = $subtotal * $descuento;

$totalcondescuento = $subtotal * (1 - $descuento);

echo "subtotal: $" . $subtotal . "\n";
echo "descuento: $" . $valordescuento . "\n";
echo "el total a pagar es: $" . $totalcondescuento;
?>

