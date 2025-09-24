<?php
require 'Database.php';

// Crear conexión
$db = new Database("pruebas");

// Insertar usuario
$id = $db->createUser("Juan", "juan@example.com");
echo "Usuario creado con ID: $id<br>";

// Consultar usuario
print_r($db->getUserById($id));

// Actualizar estado
$db->updateUserStatus($id, "inactivo");
echo "<br>Estado actualizado.";
