<?php

    spl_autoload_register(function($clase){

        $ruta = __DIR__ . '/src/' . str_replace('\\', '/', $clase) . '.php';
        if (is_readable($ruta)) {
            require_once $ruta;
        } else {
            echo "el archivo no existe";
        }
    });

?>