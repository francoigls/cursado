<?php

$routesArray = explode("/", $_SERVER['REQUEST_URI']);
$routesArray = array_filter($routesArray);

/* VALIDACION Q NO SE PIDE NADA */
if (count($routesArray) == 0) {

    $json = array(
        'status' => 404,
        'result' => 'not found'
    );

    http_response_code($json["status"]);
    echo json_encode($json);

    return;
}


/*peticiones a la api */

if(count($routesArray) == 1 && isset($_SERVER['REQUEST_METHOD'])){

        /*GET */

        if($_SERVER['REQUEST_METHOD'] == "GET"){
                $json = array(
                        'status'=> 200,
                        'result'=> 'SOLICITUD GET'
                );
                 http_response_code($json["status"]);
                 echo json_encode($json);
        };

         /*POST */

        if($_SERVER['REQUEST_METHOD'] == "POST"){
                $json = array(
                        'status'=> 200,
                        'result'=> 'SOLICITUD POST'
                );
                 http_response_code($json["status"]);
                 echo json_encode($json);
        };

         /*DELETE */

        if($_SERVER['REQUEST_METHOD'] == "DELETE"){
                $json = array(
                        'status'=> 200,
                        'result'=> 'SOLICITUD DELETE'
                );
                 http_response_code($json["status"]);
                 echo json_encode($json);
        };

         /*PUT */

        if($_SERVER['REQUEST_METHOD'] == "PUT"){
                $json = array(
                        'status'=> 200,
                        'result'=> 'SOLICITUD PUT'
                );
                 http_response_code($json["status"]);
                 echo json_encode($json);
        };
}
