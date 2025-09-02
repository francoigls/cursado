<?php

require_once "controladores/get.controller.php";

$table = $routesArray[1];

$response = new GetController();
$response -> getData($table);



