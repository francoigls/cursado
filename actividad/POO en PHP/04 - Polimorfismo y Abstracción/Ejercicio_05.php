<?php

interface Reproducible {
    public function reproducir();
}

class Pelicula implements Reproducible {
    public function reproducir() {
        echo "Reproduciendo película HD.<br>";
    }
}

class Podcast implements Reproducible {
    public function reproducir() {
        echo "Reproduciendo podcast educativo.<br>";
    }
}

$medios = [new Pelicula(), new Podcast()];

foreach ($medios as $m) {
    $m->reproducir();
}
?>