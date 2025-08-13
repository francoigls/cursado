<?php
require 'conexion.php';

$sql = "SELECT * FROM productos ORDER BY id DESC";
$stmt = $pdo->query($sql);
$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($resultados);
echo "</pre>";
