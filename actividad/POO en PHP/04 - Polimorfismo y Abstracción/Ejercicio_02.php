<?php

abstract class Vehiculo {
    abstract public function desplazarse();
}

class Bicicleta extends Vehiculo {
    public function desplazarse() {
        echo "La bicicleta se desplaza por el carril bici.<br>";
    }
}

class Avion extends Vehiculo {
    public function desplazarse() {
        echo "El avión vuela por el cielo.<br>";
    }
}

$vehiculos = [new Bicicleta(), new Avion()];

foreach ($vehiculos as $v) {
    $v->desplazarse();
}
?>