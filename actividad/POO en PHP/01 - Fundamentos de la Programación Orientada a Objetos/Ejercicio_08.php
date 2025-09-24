<?php

class Circulo {
    public $radio;

    public function calcularPerimetro() {
        return 2 * pi() * $this->radio;
    }
}

$circulo = new Circulo();
$circulo->radio = 4;

echo "Perímetro: " . $circulo->calcularPerimetro();

?>