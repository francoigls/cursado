<?php

class Vehiculo {
    private $kilometros;

    public function __construct($kilometros) {
        $this->kilometros = $kilometros;
    }

    public function getKilometros() {
        return $this->kilometros;
    }

    public function avanzar($km) {
        if ($km > 0) {
            $this->kilometros += $km;
        }
    }
}

$vehiculo = new Vehiculo(1000);
$vehiculo->avanzar(150);
echo "Kilómetros: " . $vehiculo->getKilometros() . "<br>";

?>