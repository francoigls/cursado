<?php

abstract class Animal {
    abstract public function alimentarse();
}

class Leon extends Animal {
    public function alimentarse() {
        echo "El león se alimenta de carne.<br>";
    }
}

class Pajaro extends Animal {
    public function alimentarse() {
        echo "El pájaro se alimenta de semillas.<br>";
    }
}

$animales = [new Leon(), new Pajaro()];

foreach ($animales as $a) {
    $a->alimentarse();
}
?>