<?php

class Trabajador {
    public $nombre;
    public $cargo;
    public $salario;

    public function informacion() {
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Cargo: " . $this->cargo . "<br>";
        echo "Salario: " . $this->salario;
    }
}

$trabajador = new Trabajador();
$trabajador->nombre = "Ana";
$trabajador->cargo = "Administrativa";
$trabajador->salario = 35000;
$trabajador->informacion();

?>