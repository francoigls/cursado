<?php

interface Printable {
    public function imprimir();
}

class Documento implements Printable {
    public function imprimir() {
        echo "Imprimiendo documento en papel.<br>";
    }
}

class Foto implements Printable {
    public function imprimir() {
        echo "Imprimiendo foto a color.<br>";
    }
}

$elementos = [new Documento(), new Foto()];

foreach ($elementos as $e) {
    $e->imprimir();
}
?>