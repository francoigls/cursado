<?php
class Empleado {
    public $nombre;
    public $salario;

    public function calcularPago() {
        return $this->salario;
    }
}

class Freelancer extends Empleado {
    public $horas;
    public $tarifaPorHora;

    public function calcularPago() {
        return $this->horas * $this->tarifaPorHora;
    }
}

$freelancer = new Freelancer();
$freelancer->nombre = "Sofía";
$freelancer->salario = 0; // el salario fijo no se usa
$freelancer->horas = 40;
$freelancer->tarifaPorHora = 25;

echo "Pago freelancer: " . $freelancer->calcularPago() . "<br>";
?>