<?php
class Connection extends Mysqli {
    function __construct(){
        parent::__construct('localhost', 'phpuser_api', 'clave_segura', 'api_rest');
        $this->set_charset('utf8');
        $this->connect_error == NULL ? 'conexion exitosa a la base de datos' : die('error a conectarse');
    }
}
?>