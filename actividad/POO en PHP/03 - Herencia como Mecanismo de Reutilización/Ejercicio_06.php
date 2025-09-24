<?php

class Cuenta {
    protected $saldo;

    public function __construct($saldo) {
        $this->saldo = $saldo;
    }

    public function depositar($monto) {
        $this->saldo += $monto;
    }

    public function retirar($monto) {
        if ($monto <= $this->saldo) {
            $this->saldo -= $monto;
        }
    }

    public function getSaldo() {
        return $this->saldo;
    }
}

class CuentaPremium extends Cuenta {
    public $bonificacion;

    public function aplicarBonificacion() {
        $this->saldo += $this->bonificacion;
    }
}

$cuentaPremium = new CuentaPremium(1000);
$cuentaPremium->bonificacion = 100;
$cuentaPremium->aplicarBonificacion();
echo "Saldo con bonificación: " . $cuentaPremium->getSaldo() . "<br>";

?>