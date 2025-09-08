<?php



require_once "modelos/connection.php";
require_once "controladores/delete.controller.php";

 if(isset($_GET["id"]) && isset($_GET["nameId"])){


    $columns = array($_GET[nameId]);
    

    //validar tablas y columnas


    
    if(empy(Connection::getColumnsData($table, $columns))){

        $json = array(

            'status' => 400,
            'results' => "error: los campos de datos no coinciden con los de la base de datos"


        );

        echo json_encode($json, http_response_code($json["status"]));

        return;

    }
     // solicitud de respuesta del controlador para eliminar datos en cualquier tabla
    $response = new deleteController();
    $response -> deleteData($table,$_get["id"],$_get["nameId"]);



 };