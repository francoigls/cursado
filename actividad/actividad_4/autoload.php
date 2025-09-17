<?php

spl_autoload_register(function($clase) {
    $directorios = [
        __DIR__ . '/src/',
        __DIR__ . '/modelos/'
    ];

    foreach ($directorios as $directorio) {
        $ruta = $directorio . str_replace('\\', '/', $clase) . '.php';
        if (is_readable($ruta)) {
            require_once $ruta;
            return;
        }
    }

    throw new Exception("No se pudo cargar la clase: $clase");
});