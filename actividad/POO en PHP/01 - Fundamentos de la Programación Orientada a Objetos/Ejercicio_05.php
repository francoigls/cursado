<?php

class Persona {
    public $nombre;
    public $edad;

    public function esAdulto() {
        return $this->edad >= 18;
    }
}

$persona = new Persona();
$persona->nombre = "Carlos";
$persona->edad = 20;

echo $persona->esAdulto() ? "Es adulto" : "No es adulto";

?>