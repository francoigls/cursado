<?php

require_once "modelos/put.model.php";


class PutController{

    //peticion put para editar datos


    static public function putData($table, $data, $id, $nameId){


        $response = PutModel::putData($table, $data, $id, $nameId);

        $return = new PutController();
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
                        'method'=>'put'
                );
        }

                 http_response_code($json["status"]);
                 echo json_encode($json);
    }

}