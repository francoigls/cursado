<?php

    require_once ("autoload.php");
    class Usuario extends Conexion{
        private $strNombre;
        private $intTelefono;
        private $strEmail;
        private $strDireccion;
        private $conexion;
        private $db;

       public function __construct(){
        parent::__construct();       
         $this->conexion = $this->connect(); 
        }




         //metodo de insertar a la base de datos
         public function insertUsuario(string $nombre, int $telefono, string $email, string $direccion){

            try {
                
            $this->strNombre = $nombre;
            $this->intTelefono = $telefono;
            $this->strEmail = $email;
            $this->strDireccion = $direccion;


            $sql = "INSERT INTO usuario (nombre,telefono,email,direccion) VALUES(:nom, :tel, :email, :dir)";
            $insert = $this->conexion->prepare($sql);
            $arrData = array (
                ":nom" => $this->strNombre,
                ":tel" => $this->intTelefono,
                ":email" => $this->strEmail,
                ":dir" => $this->strDireccion

            );

                $resInsert = $insert->execute($arrData);
                $idInsert = $this->conexion->lastInsertId();
                return $idInsert;
            }catch (Exception $e) {

                echo "Error: ".$e->getLine();
              
            }
   }


        public function GetUsuario(){
                try {
                    $sql = "SELECT * FROM usuario";
                    $execute = $this->conexion->query($sql);
                    $request = $execute->fetchAll(PDO::FETCH_ASSOC);
                    return $request;
                }catch (Exception $e) {

                echo "Error: ".$e->getLine();
              
            }
            }
        }//end class

