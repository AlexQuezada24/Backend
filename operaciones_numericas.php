<?php
$a = 10;
$b = 5;

echo "Suma: " . ($a + $b) . "\n";
echo "Resta: " . ($a - $b) . "\n";
echo "Multiplicación: " . ($a * $b) . "\n";
echo "División: " . ($a / $b) . "\n";

echo "Módulo: " . ($a % $b) . "\n";
echo "Exponenciación: " . ($a ** $b) . "\n";

$resultado = ($a + $b) * ($a ** 2) / $b;
echo "Resultado de operación compleja: " . $resultado . "\n";
?>
