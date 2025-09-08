<?php

require_once "modelos/connection.php";
require_once "controladores/put.controller.php";

 if(isset($_GET["id"]) && isset($_GET["nameId"])){


    //capturar datos del formulario


    $data= array();
    parse_str(file_get_contents('php://input'), $data);


     $columns = array();

    foreach(array_keys($data) as $key => $value) {


        array_push($columns, $value);


    }



    array_push($columns, $_GET["nameId"]);

    $columns = array_unique($columns);

    //validar tablas y columnas


    
    if(empy(Connection::getColumnsData($table, $columns))){

        $json = array(

            'status' => 400,
            'results' => "error: los campos de datos no coinciden con los de la base de datos"


        );

        echo json_encode($json, http_response_code($json["status"]));

        return;

    }
     // solicitud de respuesta del controlador para editar datos en cualquier tabla
    $response = new PutController();
    $response -> putData($table,$data,$_get["id"],$_get["nameId"]);



 };