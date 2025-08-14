<?php

class CuentaCorriente {
    private $saldo;
    private $limite;

    public function __construct($saldo, $limite) {
        $this->saldo = $saldo;
        $this->limite = $limite;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function retirar($monto) {
        if ($monto > 0 && ($this->saldo + $this->limite) >= $monto) {
            $this->saldo -= $monto;
            return true;
        }
        return false;
    }
}

$cuentaCorriente = new CuentaCorriente(1000, 500);
if ($cuentaCorriente->retirar(1300)) {
    echo "Retiro exitoso. Saldo actual: " . $cuentaCorriente->getSaldo();
} else {
    echo "No se puede retirar esa cantidad.";
}
?>
?>