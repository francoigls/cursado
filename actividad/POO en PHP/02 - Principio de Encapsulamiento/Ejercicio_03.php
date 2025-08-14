<?php

class Producto {
    private $precio;

    public function __construct($precio) {
        $this->setPrecio($precio);
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function setPrecio($precio) {
        if ($precio > 0) {
            $this->precio = $precio;
        }
    }
}

$producto = new Producto(150);
$producto->setPrecio(-10); // No cambia el precio
echo "Precio: " . $producto->getPrecio() . "<br>";

?>