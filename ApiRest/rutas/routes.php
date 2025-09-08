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


        $table = explode("?", $routesArray[1])[0];

        /*GET */

        if($_SERVER['REQUEST_METHOD'] == "GET"){
          include __DIR__ . "/servicios/get.php";

        };

         /*POST */

        if($_SERVER['REQUEST_METHOD'] == "POST"){
                include __DIR__ . "/servicios/post.php";
        };

         /*DELETE */

        if($_SERVER['REQUEST_METHOD'] == "DELETE"){
                include __DIR__ . "/servicios/delete.php";
        };

         /*PUT */

        if($_SERVER['REQUEST_METHOD'] == "PUT"){
                 include __DIR__ . "/servicios/put.php";
        };
}
