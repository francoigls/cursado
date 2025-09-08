<?php

class Connection{


    static public function infoDatabase(){

        $infoDB = array(
            "database" => "CreacionApi",
            "user" => "phpuser_api",
            "pass" => "clave_segura"
        );
        return $infoDB;
    }

    
    static public function Connect(){
        
        try{
            $link = new PDO(
                "mysql:host=localhost;dbname=".connection::infoDatabase()["database"],
                Connection::infoDatabase()["user"],
                Connection::infoDatabase()["pass"]
            );
            $link->exec("set names utf8");
        }catch(PDOException $e){
            die("Error: ".$e->getMessage());
        }   
        
        return $link;
        
    }


    static public function getColumnsData($table){


        $database = Connection::infoDatabase()["database"];

        return Connection::connect()
        ->query("SELECT COLUMN_NAME AS item FROM information_schema.columns WHERE table_schema = '$database' AND table_name = '$table'")
        ->fetchAll(PDO::FETCH_OBJ);


    }



};


