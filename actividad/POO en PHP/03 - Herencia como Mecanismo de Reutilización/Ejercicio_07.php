<?php

abstract class Instrumento {
    abstract public function sonar();
}

class Piano extends Instrumento {
    public function sonar() {
        echo "El piano está sonando melodiosamente.<br>";
    }
}

$piano = new Piano();
$piano->sonar();

?>