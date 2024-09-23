<?php
$numeroAleatorio = rand(1, 100); 
echo "El número aleatorio es: $numeroAleatorio<br>";
if ($numeroAleatorio > 50) {
    echo "El número es mayor que 50.";
} elseif ($numeroAleatorio < 50) {
    echo "El número es menor que 50.";
} else {
    echo "El número es igual a 50.";
}

