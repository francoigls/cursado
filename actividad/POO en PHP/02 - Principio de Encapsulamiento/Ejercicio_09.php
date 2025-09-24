<?php

class Circulo {
    private $radio;

    public function __construct($radio) {
        $this->setRadio($radio);
    }

    public function getRadio() {
        return $this->radio;
    }

    public function setRadio($radio) {
        if ($radio > 0) {
            $this->radio = $radio;
        }
    }
}

$circulo = new Circulo(5);
$circulo->setRadio(-3); // No cambia
echo "Radio: " . $circulo->getRadio() . "<br>";
?>