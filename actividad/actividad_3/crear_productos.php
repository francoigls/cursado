<?php
require 'conexion.php';

// Crear tabla
$sql = "CREATE TABLE IF NOT EXISTS productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    precio DECIMAL(10,2)
)";
$pdo->exec($sql);

// Insertar datos 
$productos = [
    ['Laptop', 1200.50],
    ['Mouse', 25.75],
    ['Teclado', 45.00],
    ['Monitor', 300.99]
];

$stmt = $pdo->prepare("INSERT INTO productos (nombre, precio) VALUES (?, ?)");
foreach ($productos as $p) {
    $stmt->execute([$p[0], $p[1]]);
}

echo " Productos insertados correctamente.";
