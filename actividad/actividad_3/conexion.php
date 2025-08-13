<?php
$host = "localhost";
$dbname = "pruebas"; // vamos a usar una BD de ejemplo
$user = "phpuser";
$pass = "franco"; // root en Debian con socket normalmente no necesita clave

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo " Conexión exitosa a la base de datos.";
} catch (PDOException $e) {
    echo " Error de conexión: " . $e->getMessage();
}