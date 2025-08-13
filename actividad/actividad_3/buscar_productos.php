<?php
require 'conexion.php';

$nombreBuscado = "Mouse"; // cambiar para probar

$sql = "SELECT * FROM productos WHERE nombre = :nombre";
$stmt = $pdo->prepare($sql);
$stmt->execute(['nombre' => $nombreBuscado]);
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($resultado);
echo "</pre>";
