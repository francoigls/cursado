<?php

abstract class Figura {
    abstract public function area();
}

class Triangulo extends Figura {
    private $base, $altura;
    public function __construct($base, $altura) {
        $this->base = $base;
        $this->altura = $altura;
    }
    public function area() {
        return 0.5 * $this->base * $this->altura;
    }
}

class Circulo extends Figura {
    private $radio;
    public function __construct($radio) {
        $this->radio = $radio;
    }
    public function area() {
        return pi() * $this->radio * $this->radio;
    }
}

$figuras = [new Triangulo(10, 5), new Circulo(3)];

foreach ($figuras as $f) {
    echo "Área: " . $f->area() . "<br>";
}
?>