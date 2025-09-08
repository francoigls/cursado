<?php

require_once "modelos/get.model.php";

class GetController{

        /*       peticion GET sin filtro  */ 

    static public function getData($table, $select,$orderBy,$orderMode,$startAt,$endAt){


        $response = GetModel::getData($table, $select,$orderBy,$orderMode,$startAt,$endAt);

        $return = new GetController();
        $return -> fncResponse($response);

    }

                        /*       peticion GET con filtro  */ 

      static public function getDataFilter($table, $select, $linkTo, $equalTo ,$orderBy,$orderMode,$startAt,$endAt){


        $response = GetModel::getDataFilter($table, $select, $linkTo,$equalTo ,$orderBy,$orderMode,$startAt,$endAt);

        $return = new GetController();
        $return -> fncResponse($response);

    }

         /* ------ petición GET con relación (sin filtros) ------ */ 

    static public function getRelData($rel, $type, $select,$orderBy,$orderMode,$startAt,$endAt){


        $response = GetModel::getRelData($rel, $type, $select,$orderBy,$orderMode,$startAt,$endAt);

        $return = new GetController();
        $return -> fncResponse($response);

    }

        /* ------ petición GET con relación con filtros ------ */ 

    static public function getRelDataFilter($rel, $type, $select,$linkTo,$equalTo,$orderBy,$orderMode,$startAt,$endAt){


        $response = GetModel::getRelData($rel, $type, $select, $linkTo,$equalTo,$orderBy,$orderMode,$startAt,$endAt);

        $return = new GetController();
        $return -> fncResponse($response);

    }

        /* ------ petición GET para el buscador sin relaciones ------ */ 
    static public function getDataSearch($table, $select, $linkTo, $search, $orderBy, $orderMode, $startAt, $endAt){
    $response = GetModel::getDataSearch($table, $select, $linkTo, $search, $orderBy, $orderMode, $startAt, $endAt);

    $return = new GetController();
    $return->fncResponse($response);
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
                        'results'=> 'Not found',
                        'method'=> 'get'
                );
        }

                 http_response_code($json["status"]);
                 echo json_encode($json);
    }

}