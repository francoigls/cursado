<?php
class Vehiculo {
    public $marca;

    public function avanzar() {
        echo "El vehículo de marca {$this->marca} avanza.<br>";
    }
}

class Moto extends Vehiculo {
    public $cilindrada;

    public function avanzar() {
        echo "La moto de marca {$this->marca} y cilindrada {$this->cilindrada} avanza rápido.<br>";
    }
}

$moto = new Moto();
$moto->marca = "Honda";
$moto->cilindrada = 150;
$moto->avanzar();
?>