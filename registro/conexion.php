<?php
// Conexión a la base de datos
$conn = new mysqli('127.0.0.1', 'root', '', 'diego_dj_producciones');

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Comprobar si la conexión se ha establecido correctamente
echo "Felicitaciones su Conexión Es Exitosa: " . $conn->host_info;
?>
