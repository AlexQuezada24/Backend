<?php
// Conexión a la base de datos
$conn = new mysqli("localhost", "root", "", "task_manager");

// Verificar si la conexión es exitosa
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
