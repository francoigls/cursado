<?php 


/*
mostrar errores
*/
ini_set('display_errors', 1);       
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);              // Reportar TODOS los errores

ini_set("log_errors", 1);            // Guardar errores en archivo
ini_set("error_log", __DIR__ . "/php-error.log");  // Se crea al lado de index.php

/*
requerimientos
*/
require_once "modelos/connection.php";

echo '<pre>'; print_r(Connection::Connect()); echo '</pre>';

return;


require_once "controladores/routers.controller.php";

$index = new RoutesController();
$index -> index();

?>
