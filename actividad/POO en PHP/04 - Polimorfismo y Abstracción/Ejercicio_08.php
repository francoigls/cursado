<?php

abstract class Instrumento {
    abstract public function tocar();
}

class Violin extends Instrumento {
    public function tocar() {
        echo "Tocando el violín con el arco.<br>";
    }
}

class Bateria extends Instrumento {
    public function tocar() {
        echo "Tocando la batería con baquetas.<br>";
    }
}

$instrumentos = [new Violin(), new Bateria()];

foreach ($instrumentos as $i) {
    $i->tocar();
}
?>