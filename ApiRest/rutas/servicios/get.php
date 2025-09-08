<?php

require_once "controladores/get.controller.php";

$select   = $_GET["select"]   ?? "*";
$orderBy  = $_GET["orderBy"]  ?? null;
$orderMode= $_GET["orderMode"]?? null;
$startAt  = $_GET["startAt"]  ?? null;
$endAt    = $_GET["endAt"]    ?? null;

$response = new GetController();

/* ------ petición GET con filtro ------ */
if (isset($_GET["linkTo"]) && isset($_GET["equalTo"]) && !isset($_GET["rel"]) && !isset($_GET["type"])) {

    /* ------ petición GET con relación (sin filtros) ------ */
    $response->getDataFilter(
        $table,
        $select,
        $_GET["linkTo"],
        $_GET["equalTo"],
        $orderBy,
        $orderMode,
        $startAt,
        $endAt
    );

} else if (isset($_GET["rel"]) && isset($_GET["type"]) && $table == "relation" && !isset($_GET["linkTo"]) && !isset($_GET["equalTo"])){
    /* ------ petición GET sin filtro ------ */

    $response->getRelData($_GET["rel"], $_GET["type"], $select, $orderBy, $orderMode, $startAt, $endAt);

}else if (isset($_GET["rel"]) && isset($_GET["type"]) && $table == "relation" && isset($_GET["linkTo"]) && isset($_GET["equalTo"])){
    
    /* ------ petición GET con filtro ------ */
    $response->getRelDataFilter($_GET["rel"], $_GET["type"], $select,$_GET["linkTo"],$_GET["equalTo"], $orderBy, $orderMode, $startAt, $endAt);


      /* ------ petición GET para el buscador sin relaciones ------ */
}else if(isset($_GET["linkTo"]) && isset($_GET["search"])){

    $response->getDataSearch(
        $table,
        $select,
        $_GET["linkTo"],
        $_GET["search"],   
        $orderBy,
        $orderMode,
        $startAt,
        $endAt
    );
} else {

    $response->getData(
        $table,
        $select,
        $orderBy,
        $orderMode,
        $startAt,
        $endAt
    );
}

