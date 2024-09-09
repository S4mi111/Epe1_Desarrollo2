<?php
// db.php
$host = 'localhost';
$db = 'techsolutions'; // Cambia el nombre de la base de datos si es necesario
$user = 'root'; // Usuario de la base de datos
$password = ''; // Contraseña de la base de datos

// Crear la conexión
$conn = new mysqli($host, $user, $password, $db);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
