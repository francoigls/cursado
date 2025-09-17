<?php
require 'conexion.php';

// Crear tabla si no existe
$sql = "CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100),
    estado VARCHAR(20)
)";
$pdo->exec($sql);

// Insertar un usuario de prueba
$pdo->exec("INSERT INTO usuarios (email, estado) VALUES ('test@example.com', 'activo')");

$nuevoEstado = "inactivo";
$idUsuario = 1;

try {
    $sql = "UPDATE usuarios SET estado = :estado WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['estado' => $nuevoEstado, 'id' => $idUsuario]);
    echo " Usuario actualizado.";
} catch (PDOException $e) {
    echo " Error: " . $e->getMessage();
}
