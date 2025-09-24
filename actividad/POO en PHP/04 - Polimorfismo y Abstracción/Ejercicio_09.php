<?php

interface Calculable {
    public function calcularPerimetro();
}

class Cuadrado implements Calculable {
    private $lado;
    public function __construct($lado) {
        $this->lado = $lado;
    }
    public function calcularPerimetro() {
        return 4 * $this->lado;
    }
}

class Circulo2 implements Calculable {
    private $radio;
    public function __construct($radio) {
        $this->radio = $radio;
    }
    public function calcularPerimetro() {
        return 2 * pi() * $this->radio;
    }
}

$formas = [new Cuadrado(4), new Circulo2(5)];

foreach ($formas as $f) {
    echo "Perímetro: " . $f->calcularPerimetro() . "<br>";
}
?>