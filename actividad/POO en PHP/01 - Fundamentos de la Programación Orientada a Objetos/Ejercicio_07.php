<?php

class Producto {
    public $nombre;
    public $precio;
    public $stock;

    public function valorInventario() {
        return $this->precio * $this->stock;
    }
}

$producto = new Producto();
$producto->nombre = "Camiseta";
$producto->precio = 20;
$producto->stock = 50;

echo "Valor inventario: " . $producto->valorInventario();
?>