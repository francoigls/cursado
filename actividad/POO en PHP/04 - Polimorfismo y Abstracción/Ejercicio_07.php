<?php

interface Comunicable {
    public function enviarMensaje();
}

class Correo implements Comunicable {
    public function enviarMensaje() {
        echo "Enviando mensaje por correo electrónico.<br>";
    }
}

class Texto implements Comunicable {
    public function enviarMensaje() {
        echo "Enviando mensaje de texto SMS.<br>";
    }
}

$mensajes = [new Correo(), new Texto()];

foreach ($mensajes as $m) {
    $m->enviarMensaje();
}
?>