<?php 

/*
mostrar errores
*/
ini_set('display_errors', 1);       
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);              

ini_set("log_errors", 1);            
ini_set("error_log", __DIR__ . "/php-error.log");  

/* requerimientos */
require_once "modelos/connection.php";
require_once "controladores/routers.controller.php";

$index = new RoutesController();
$index -> index();

?>
