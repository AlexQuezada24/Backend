<?php
$texto = "Hola mundo, bienvenido a PHP";

echo "Longitud del texto: " . strlen($texto) . "\n";

$texto_reemplazado = str_replace("mundo", "usuario", $texto);
echo "Texto con reemplazo: " . $texto_reemplazado . "\n";
$subcadena = substr($texto, 5, 10);
echo "Subcadena extraída: " . $subcadena . "\n";
?>
