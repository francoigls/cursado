<?php 
error_reporting(E_ALL); 
ini_set('display_errors', 1); 

require_once(__DIR__ . "/Config/Config.php");
require_once(__DIR__ . "/Helpers/Helpers.php");

$url = !empty($_GET['url']) ? $_GET['url']: "home/home";
$arrUrl = explode("/",$url);
$controller = $arrUrl[0];
$method = 'home';
$params = "";

if (!empty($arrUrl[1])) {
    if ($arrUrl[1] != "") {
        $method = $arrUrl[1];
    }
}

if (!empty($arrUrl[2]) && ($arrUrl[2] != "")) {
    for ($i = 2; $i < count($arrUrl); $i++) {
        $params .= $arrUrl[$i] . ",";
    }
    $params = trim($params, ",");
}



   if(!empty($arrUrl[1])){
     if($arrUrl[1] !=""){
         $method = $arrUrl[1]; 
        } 
    }//end if method y controller 
        
    if(!empty($arrUrl[2]) && ($arrUrl[2] !="")){
            for ($i=2; $i < count($arrUrl); $i++){
                 $params .= $arrUrl[$i].','; 
            } 
            $params = trim($params, ",");
                 }// end if parametros 

        require_once(__DIR__ . "/Libraries/core/Autoload.php");
        require_once(__DIR__ . "/Libraries/core/Load.php");



 
