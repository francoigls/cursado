<?php
    

    class Cliente extends Controllers{

        public function __construct(){

          parent::__construct();
          
        }

        public function cliente($idcliente){

            echo "Extraer informacion del cliente" .$idcliente;
        }

        public function registro(){
            try {
                $method = $_SERVER['REQUEST_METHOD'];
                $response = [];
                 if($method == "POST"){

                    $_POST = json_decode(file_get_contents('php://input'),true);

                    dep(testString($_POST['nombre']));

                    if(!testString($_POST['nombre'])){
                        echo "error en los nombres";
                    }

                    dep($_POST);



                    $response = array('status' => true, 'msg' => 'Datos guardados correctamente');
                    $code = 200;
                }else{
                    $response = array('status' => false, 'msg' => 'error en la solicitud ' .$method);
                    $code = 400;
                }
                
                jsonResponse($response,$code);
                die();
                
            } catch (Exception $e) {
                echo "error en el proceso: ". $e->getMessage();
            }
            die();
        }


        public function clientes(){

            echo "extrae todos los clientes";
        }


        public function actualizar($idcliente){

            echo "actualizar informacion del cliente".$idcliente;
        }


        public function eliminar($idcliente){

            echo "eliminar cliente".$idcliente;
        }



        
   

    }//end class home