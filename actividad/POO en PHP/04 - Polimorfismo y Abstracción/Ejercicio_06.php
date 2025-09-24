<?php

abstract class Trabajador {
    abstract public function calcularIngreso();
}

class Fijo extends Trabajador {
    private $sueldo;
    public function __construct($sueldo) {
        $this->sueldo = $sueldo;
    }
    public function calcularIngreso() {
        return $this->sueldo;
    }
}

class Temporal extends Trabajador {
    private $horas, $valorHora;
    public function __construct($horas, $valorHora) {
        $this->horas = $horas;
        $this->valorHora = $valorHora;
    }
    public function calcularIngreso() {
        return $this->horas * $this->valorHora;
    }
}

$trabajadores = [
    new Fijo(5000),
    new Temporal(80, 50)
];

foreach ($trabajadores as $t) {
    echo "Ingreso: $" . $t->calcularIngreso() . "<br>";
}
?>