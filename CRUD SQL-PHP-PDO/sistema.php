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


    // obtencion de usuario segun id
    // $usuario = $objUsuario->GetUsuario(1);
    
    //modificar usuario existente
    //$update = $objUsuario->updateUsuario(1,"javier herrera",341431134,"elmatacuriosos@info.com","cambio cambio");
    

    //eliminacin de usuario y testeo con llamado a todos los usuarios
    /*$delete = $objUsuario->delUsuario(1);
    $usuario = $objUsuario->GetUsuario(1);
    $usuarioS = $objUsuario->GetUsuarios();
    print_r("<pre>");
    print_r($usuarioS);
    print_r("</pre>");
    */

    print_r("<pre>");
    print_r($usuarioS);
    print_r("</pre>");