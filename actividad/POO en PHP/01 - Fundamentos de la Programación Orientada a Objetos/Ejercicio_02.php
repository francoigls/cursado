<?php

class Rectangulo {
    public $largo;
    public $ancho;

    public function calcularArea() {
        return $this->largo * $this->ancho;
    }
}

$rectangulo = new Rectangulo();
$rectangulo->largo = 5;
$rectangulo->ancho = 3;

echo "Área: " . $rectangulo->calcularArea();

?>