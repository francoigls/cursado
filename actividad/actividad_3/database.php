<?php
class Database {
    private $pdo;

    public function __construct($dbname, $host="localhost", $user="root", $pass="") {
        $this->pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getUserById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM usuarios WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createUser($nombre, $email) {
        $stmt = $this->pdo->prepare("INSERT INTO usuarios (email, estado) VALUES (?, 'activo')");
        $stmt->execute([$email]);
        return $this->pdo->lastInsertId();
    }

    public function updateUserStatus($id, $estado) {
        $stmt = $this->pdo->prepare("UPDATE usuarios SET estado = ? WHERE id = ?");
        return $stmt->execute([$estado, $id]);
    }
}
