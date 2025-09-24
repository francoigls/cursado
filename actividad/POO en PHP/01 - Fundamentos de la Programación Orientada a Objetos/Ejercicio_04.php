<?php

class Coche {
    public $marca;
    public $modelo;
    public $color;

    public function detalles() {
        echo "Marca: " . $this->marca . "<br>";
        echo "Modelo: " . $this->modelo . "<br>";
        echo "Color: " . $this->color;
    }
}

$coche = new Coche();
$coche->marca = "Toyota";
$coche->modelo = "Corolla";
$coche->color = "Rojo";
$coche->detalles();

?>