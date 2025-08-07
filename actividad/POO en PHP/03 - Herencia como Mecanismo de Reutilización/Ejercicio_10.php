<?php

class Animal {
    public $nombre;

    public function moverse() {
        echo "El animal se mueve.<br>";
    }
}

class Pez extends Animal {
    public $tipoAgua;

    public function moverse() {
        echo "El pez nada en agua {$this->tipoAgua}.<br>";
    }
}

$pez = new Pez();
$pez->nombre = "Nemo";
$pez->tipoAgua = "salada";
$pez->moverse();
?>