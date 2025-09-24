<?php
require 'conexion.php';

// Crear tabla si no existe
$sql = "CREATE TABLE IF NOT EXISTS cuentas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    saldo DECIMAL(10,2)
)";
$pdo->exec($sql);

// Insertar cuentas de prueba
$pdo->exec("INSERT INTO cuentas (saldo) VALUES (1000.00), (500.00)");

$cuentaA = 1;
$cuentaB = 2;
$monto = 200.00;

try {
    $pdo->beginTransaction();

    // Restar a cuenta A
    $stmt = $pdo->prepare("UPDATE cuentas SET saldo = saldo - :monto WHERE id = :id");
    $stmt->execute(['monto' => $monto, 'id' => $cuentaA]);

    // Simular error
    $cuentaB = 99; // ID que no existe

    // Sumar a cuenta B
    $stmt = $pdo->prepare("UPDATE cuentas SET saldo = saldo + :monto WHERE id = :id");
    $stmt->execute(['monto' => $monto, 'id' => $cuentaB]);

    $pdo->commit();
    echo " Transferencia realizada.";
} catch (PDOException $e) {
    $pdo->rollBack();
    echo " Error en la transferencia: " . $e->getMessage();
}
