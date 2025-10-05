<?php

    class Conexion{
       
        private $conect;

        public function __construct(){

            if(CONNECTION){
    
                try {
                    $ConnectionString = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET;
                    $this->conect = new PDO($ConnectionString,DB_USER,DB_PASSWORD);
                    $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    //echo "Conexion exitosa";
                } catch (PDOException $e) {
                    $this->conect = "Error de conexion";
                    echo "ERROR: ". $e->getMessage();
                }//end catch
            }//end if
        }//end construct


        public function connect() {
       return $this->conect;
        }
    }
    $conexiondb = new Conexion();