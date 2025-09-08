<?php 



require_once "connection.php";
require_once "get.model.php";



class DeleteModel{


//peticion DELETE para eliminar datos de forma dinamica

 static public function DeleteData($table, $id, $nameId){


    // validacion de ID

    $response = GetModel::getDataFilter($table,$nameId,$nameId, $id, null, null, null, null);


    if(empty($response)){
        $response = array(


            "comment" => "id no encontrada en la base de datos "

        );

        return $response;
    }


    //ELIMINAR  registros
    $sql = "DELETE FROM $table WHERE $nameId = :$nameId";
    
    $link = Connection::connect();
    $stmt = $link->prepare($sql);
    
    $stmt->bindParam(":".$nameId, $id, PDO::PARAM_STR);
    
    if($stmt -> execute()){

        $response = array (

            "comment" => "el proceso fue exitoso"

        );

        return $response;

    }else{
        return $link->errorinfo();
    }

}


}