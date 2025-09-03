<?php

require_once "modelos/get.model.php";

class GetController{

        /*       peticion GET sin filtro  */ 

    static public function getData($table, $select){


        $response = GetModel::getData($table, $select);

        $return = new GetController();
        $return -> fncResponse($response);

    }

                        /*       peticion GET con filtro  */ 

      static public function getDataFilter($table, $select, $linkTo, $equalTo){


        $response = GetModel::getDataFilter($table, $select, $linkTo,$equalTo);

        $return = new GetController();
        $return -> fncResponse($response);

    }


    /*respuestas controlador */


    public function fncResponse($response){

        if(!empty($response)){

               $json = array(
                        'status'=> 200,
                        'total'=> count($response),
                        'results'=> $response
                );
        }else{
                $json = array(
                        'status'=> 404,
                        'results'=> 'Not found'
                );
        }

                 http_response_code($json["status"]);
                 echo json_encode($json);
    }

}