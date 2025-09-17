<?php

    class Conexion{
        private $host = "localhost";
        private $user = "phpuser_api";
        private $password = "clave_segura";
        private $db = "db_sistemas";
        private $conect;

        public function __construct(){
            try {
                $ConnectionString = "mysql:host=".$this->host.";dbname=".$this->db.";charset=utf8";
                $this->conect = new PDO($ConnectionString,$this->user,$this->password);
                $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                //echo "Conexion exitosa";
            } catch (PDOException $e) {
                $this->conect = "Error de conexion";
                echo "ERROR: ". $e->getMessage();
            }
        }


        public function connect() {
       return $this->conect;
        }
    }
    $conexiondb = new conexion();
    

  
