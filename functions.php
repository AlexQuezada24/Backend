<?php
// Función para limpiar datos de formularios
function sanitizeInput($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Función para verificar si el usuario está autenticado
function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

// Función para redireccionar a otra página
function redirect($url) {
    header("Location: " . $url);
    exit();
}
?>
