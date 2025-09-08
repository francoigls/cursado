<?php


require_once "modelos/connection.php";
require_once "controladores/post.controller.php";

if(isset($_POST)){
    $columns = array();

    foreach(array_keys($_POST) as $key => $value) {


        array_push($columns, $value);


    }


     //validacion de tablas y columnas

    if(empy(Connection::getColumnsData($table, $columns))){

        $json = array(

            'status' => 400,
            'results' => "error: los campos de datos no coinciden con los de la base de datos"


        );

        echo json_encode($json, http_response_code($json["status"]));

        return;

    }

    $response = new PostController();
    $response -> postData($table,$_POST);


    

}