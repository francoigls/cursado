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
};


