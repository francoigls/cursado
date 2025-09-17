<?php


    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once ("autoload.php");


    $objUsuario = new Usuario();


    //insert de prueba
    //$insert = $objUsuario->insertUsuario("sebastian",341431134,"sebastian@info.com","Ciudad gotica");
    //print_r($insert);


    //obtencion de todos los usuarios
    //$usuario = $objUsuario->GetUsuarios();


    $usuario = $objUsuario->GetUsuario(1);
    print_r("<pre>");
    print_r($usuario);
    print_r("</pre>");