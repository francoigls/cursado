<?php
class Vehiculo2 {
    public $velocidad = 0;

    public function acelerar() {
        $this->velocidad += 5;
    }

    public function getVelocidad() {
        return $this->velocidad;
    }
}

class Camion extends Vehiculo2 {
    public function acelerar() {
        $this->velocidad += 10;
    }
}

$camion = new Camion();
$camion->acelerar();
echo "Velocidad del camión: " . $camion->getVelocidad() . "<br>";

?>