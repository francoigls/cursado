<?php

require_once "connection.php";

class GetModel{

    /*=============================================
        PETICIÓN GET SIN FILTRO
    =============================================*/
    static public function getData($table, $select, $orderBy, $orderMode, $startAt, $endAt){


        // validacion de existencia de la tabla

        if(empty(Connection::getColumnsData($table))){
            return null;
        }


        $sql = "SELECT $select FROM $table";

        // Ordenar sin límite
        if ($orderBy != null && $orderMode != null && $startAt == null && $endAt == null) {
            $sql .= " ORDER BY $orderBy $orderMode";
        }

        // Ordenar con límite
        if ($orderBy != null && $orderMode != null && $startAt != null && $endAt != null) {
            $sql .= " ORDER BY $orderBy $orderMode LIMIT $startAt, $endAt";
        }

        // Limitar sin ordenar
        if ($orderBy == null && $orderMode == null && $startAt != null && $endAt != null) {
            $sql .= " LIMIT $startAt, $endAt";
        }

        $stmt = Connection::connect()->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }


    /*=============================================
        PETICIÓN GET CON FILTRO
    =============================================*/
    static public function getDataFilter($table, $select, $linkTo, $equalTo, $orderBy, $orderMode, $startAt, $endAt){

        
        // validacion de existencia de la tabla

        if(empty(Connection::getColumnsData($table))){
            return null;
        }



        $linkToArray  = explode(",", $linkTo);
        $equalToArray = explode("_", $equalTo);

        $linkToText = "";

        if(count($linkToArray) > 1){
            foreach ($linkToArray as $key => $value){
                if($key > 0){
                    $linkToText .= " AND ".$value." = :".$value;
                }
            }
        }

        // Base con filtros
        $sql = "SELECT $select FROM $table WHERE ".$linkToArray[0]." = :".$linkToArray[0].$linkToText;

        // Ordenar sin límite
        if ($orderBy != null && $orderMode != null && $startAt == null && $endAt == null) {
            $sql .= " ORDER BY $orderBy $orderMode";
        }

        // Ordenar con límite
        if ($orderBy != null && $orderMode != null && $startAt != null && $endAt != null) {
            $sql .= " ORDER BY $orderBy $orderMode LIMIT $startAt, $endAt";
        }

        // Limitar sin ordenar
        if ($orderBy == null && $orderMode == null && $startAt != null && $endAt != null) {
            $sql .= " LIMIT $startAt, $endAt";
        }

        $stmt = Connection::connect()->prepare($sql);

        foreach ($linkToArray as $key => $value){
            $stmt->bindParam(":".$value, $equalToArray[$key], PDO::PARAM_STR);
        }

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }


    /*=============================================
        PETICIÓN GET SIN FILTRO ENTRE TABLAS RELACIONADAS
    =============================================*/
   static public function getRelData($rel, $type, $select, $orderBy, $orderMode, $startAt, $endAt){

    $relArray  = explode(",", $rel);   // tablas
    $typeArray = explode(",", $type);  // columnas de relación



    $sql = "SELECT $select 
            FROM $relArray[0] 
            INNER JOIN $relArray[1] 
            ON $relArray[0].$typeArray[0] = $relArray[1].$typeArray[1]";

    // Ordenar sin límite
    if($orderBy != null && $orderMode != null && $startAt == null && $endAt == null){
        $sql .= " ORDER BY $orderBy $orderMode";
    }

    // Ordenar con límite
    if($orderBy != null && $orderMode != null && $startAt != null && $endAt != null){
        $sql .= " ORDER BY $orderBy $orderMode LIMIT $startAt, $endAt";
    }

    // Limitar sin ordenar
    if($orderBy == null && $orderMode == null && $startAt != null && $endAt != null){
        $sql .= " LIMIT $startAt, $endAt";
    }

    $stmt = Connection::connect()->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_CLASS);
}

    
    /*=============================================
        PETICIÓN GET CON FILTRO ENTRE TABLAS RELACIONADAS
    =============================================*/
   static public function getRelDataFilter($rel, $type, $select, $linkTo, $equalTo, $orderBy, $orderMode, $startAt, $endAt){

    $relArray  = explode(",", $rel);   // tablas
    $typeArray = explode(",", $type);  // columnas de relación

    $linkToArray  = explode(",", $linkTo);
    $equalToArray = explode("_", $equalTo);

    $linkToText = "";

    // Recorrer cada condición
    foreach ($linkToArray as $key => $value) {

        
        // validacion de existencia de la tabla

        if(empty(Connection::getColumnsData($value))){
            return null;
        }


       
        if (strpos($value, ".") === false) {
            $linkToArray[$key] = $relArray[0] . "." . $value;
        }

        if($key > 0){
            $linkToText .= " AND ".$linkToArray[$key]." = :param".$key;
        }
    }

    // Construcción de la consulta
    $sql = "SELECT $select 
            FROM $relArray[0] 
            INNER JOIN $relArray[1] 
            ON $relArray[0].$typeArray[0] = $relArray[1].$typeArray[1]
            WHERE ".$linkToArray[0]." = :param0 $linkToText";

    // Ordenar sin límite
    if($orderBy != null && $orderMode != null && $startAt == null && $endAt == null){
        $sql .= " ORDER BY $orderBy $orderMode";
    }

    // Ordenar con límite
    if($orderBy != null && $orderMode != null && $startAt != null && $endAt != null){
        $sql .= " ORDER BY $orderBy $orderMode LIMIT $startAt, $endAt";
    }

    // Limitar sin ordenar
    if($orderBy == null && $orderMode == null && $startAt != null && $endAt != null){
        $sql .= " LIMIT $startAt, $endAt";
    }

    $stmt = Connection::connect()->prepare($sql);

    // Bindeo de parámetros dinámicos
    foreach ($equalToArray as $key => $value){
        $stmt->bindParam(":param".$key, $equalToArray[$key], PDO::PARAM_STR);
    }

    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_CLASS);
}




      static public function getDataSearch($table, $select, $linkTo, $search, $orderBy, $orderMode, $startAt, $endAt){
    
        
        // validacion de existencia de la tabla

        if(empty(Connection::getColumnsData($table))){
            return null;
        }



    // Base del query
    $sql = "SELECT $select FROM $table WHERE $linkTo LIKE :search";

    // Ordenar sin límite
    if ($orderBy != null && $orderMode != null && $startAt == null && $endAt == null) {
        $sql .= " ORDER BY $orderBy $orderMode";
    }

    // Ordenar con límite
    if ($orderBy != null && $orderMode != null && $startAt != null && $endAt != null) {
        $sql .= " ORDER BY $orderBy $orderMode LIMIT $startAt, $endAt";
    }

    // Limitar sin ordenar
    if ($orderBy == null && $orderMode == null && $startAt != null && $endAt != null) {
        $sql .= " LIMIT $startAt, $endAt";
    }

    $stmt = Connection::connect()->prepare($sql);

    // Param seguro para el LIKE
    $searchParam = "%$search%";
    $stmt->bindParam(":search", $searchParam, PDO::PARAM_STR);

    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_CLASS);
}





    }