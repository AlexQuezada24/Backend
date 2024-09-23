<?php
$email = "test_user@example.com";
echo "El correo proporcionado es: $email<br>";
$regex = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
if (preg_match($regex, $email)) {
    echo "El correo es válido<br>";
} else {
    echo "El correo no es válido<br>";
}
$nombre_usuario = substr($email, 0, strpos($email, '@'));
echo "El nombre de usuario es: $nombre_usuario<br>";

?>