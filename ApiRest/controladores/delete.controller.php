<?php

require_once "modelos/delete.model.php";


class DeleteController{

    //peticion delete para eliminar datos


    static public function DeleteData($table, $id, $nameId){


        $response = DeleteModel::DeleteData($table, $id, $nameId);

        $return = new DeleteController();
        $return -> fncResponse($response);

    }




      /*respuestas controlador */


    public function fncResponse($response){

        if(!empty($response)){

               $json = array(
                        'status'=> 200,
                        'results'=> $response
                );
        }else{
                $json = array(
                        'status'=> 404,
                        'results'=> 'Not found',
                        'method'=>'Delete'
                );
        }

                 http_response_code($json["status"]);
                 echo json_encode($json);
    }

}