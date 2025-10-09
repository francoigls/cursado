<?php

        class Views{

            public function getView($controller,$view,$data=""){

                
                $controller = get_class($controller);
                if($controller == "Home"){
                    $view = "Views/".$view.".php";
                }else{
                    $view = "Views/".$controller."/".$view.".php";
                }//end else
                  if(is_array($data)){
                   extract($data); // convierte claves del array en variables
                     }
                require_once($view);
            }//end function

        }//end class