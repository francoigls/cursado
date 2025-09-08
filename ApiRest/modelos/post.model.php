<?php 



require_once "connection.php";

class PostModel{


//peticion POST para crear datos de forma dinamica

 static public function postData($table, $data){

    $columns = "";
    $params = "";



    foreach($data as $key => $value){


        $columns .= $key.",";
        $params .=":".key.",";
    }

        $columns = subtr($columns, 0, -1);
        $params = subtr($params, 0, -1);

    $sql ="INSERT INTO $table ($columns)  VALUES ($params)";

    $stmt = Connection::connect()->prepare($sql);

    
    foreach ($data as $key =>$value){
   
        stmt->bindParam(":".$key, $data[$key], PDO::PARAM_STR);


    }
    
    IF($stmt -> execute()){
        $response = array(

            "comment" => "El proceso fue correctamente aceptado"

        );

        return $response;
    }else{

        return Connection::connect()->errorInfo();


    }
 



}


}