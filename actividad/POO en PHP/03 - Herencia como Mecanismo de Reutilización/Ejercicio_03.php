<?php

class Persona {
    public $nombre;
    public $edad;

    public function saludar() {
        echo "Hola, soy {$this->nombre} y tengo {$this->edad} años.<br>";
    }
}

class Profesor extends Persona {
    public $materia;

    public function saludar() {
        echo "Hola, soy {$this->nombre}, tengo {$this->edad} años y doy clase de {$this->materia}.<br>";
    }
}

$profesor = new Profesor();
$profesor->nombre = "Luis";
$profesor->edad = 45;
$profesor->materia = "Matemáticas";
$profesor->saludar();

?>