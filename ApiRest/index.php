<?php 
error_reporting(E_ALL); 
ini_set('display_errors', 1); 



$url = !empty($_GET['url']) ? $_GET['url']: "home/home";
$arrUrl = explode("/",$url);
$controller = $arrUrl[0];
$method = $arrUrl[0];
$params = "";


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

 //mayusculas                 
$controller = ucwords($controller);
$controllerfile = "Controllers/".$controller.".php"; 
    if(file_exists($controllerfile)){
         require_once($controllerfile);
          $controller = new $controller();
           if(method_exists($controller, $method)){
             $controller->{$method}($params); 
            }else{ 
                echo "el metodo no existe"; 
            }//end validacion de methods 
                }else{ 
                    echo "el controlador no existe";
                 }//end file exists




// echo "controlador ;" .$controller;
// echo "<br>";
// echo "metodo ;" . $method;
// echo "<br>";
// echo "parametros :" . $params;
// echo "<br>";


// print_r($arrUrl);


