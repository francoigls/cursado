<?php
class Estudiante {
    public $nombre;
    public $edad;
    public $matricula;

    public function mostrarDatos() {
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Edad: " . $this->edad . "<br>";
        echo "Matrícula: " . $this->matricula;
    }
}

$estudiante = new Estudiante();
$estudiante->nombre = "Lucía";
$estudiante->edad = 21;
$estudiante->matricula = "A12345";
$estudiante->mostrarDatos();

?>