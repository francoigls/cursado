<?php

class Animal {
    public $especie;

    public function emitirSonido() {
        echo "El animal emite un sonido.<br>";
    }
}

class Gato extends Animal {
    public function emitirSonido() {
        echo "¡Miau!<br>";
    }
}

$gato = new Gato();
$gato->emitirSonido();

?>