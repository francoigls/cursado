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


                    //validacion de datos en la tabla cliente de la base de datos
                    if(empty($_POST['direccion'])){

                        $response = array('status' => false, 'msg' => 'La direccion es requerida ');
                        jsonResponse($response,200);
                        die();
                    }
                    if(!testString($_POST['nombre'])){

                        $response = array('status' => false, 'msg' => 'Error en los nombres');
                        jsonResponse($response,200);
                        die();
                    }
                    if(!testString($_POST['apellido'])){

                        $response = array('status' => false, 'msg' => 'Error en el apellido');
                        jsonResponse($response,200);
                        die();
                    }
                    if(!testEntero($_POST['telefono'])){

                        $response = array('status' => false, 'msg' => 'Error en el telefono');
                        jsonResponse($response,200);
                        die();
                    }
                    if(!testEmail($_POST['email'])){

                        $response = array('status' => false, 'msg' => 'Error en el email');
                        jsonResponse($response,200);
                        die();
                    }
                    if(!testDireccion($_POST['direccion'])){

                        $response = array('status' => false, 'msg' => 'Error en la direccion');
                        jsonResponse($response,200);
                        die();
                    }
                    if(!testCuil($_POST['cuil'])){

                        $response = array('status' => false, 'msg' => 'Error en el cuil');
                        jsonResponse($response,200);
                        die();
                    }


                    $strDni = $_POST['dni'];
                    $strNombre = ucwords(strtolower($_POST['nombre']));
                    $strApellido = ucwords(strtolower($_POST['apellido']));
                    $strTelefono = $_POST['telefono'];
                    $strEmail = strtolower($_POST['email']);
                    $strDireccion = $_POST['direccion'];
                    $strCuil = $_POST['cuil'];
                    $request = $this->model->setCliente($strDni,
                                                        $strNombre,
                                                        $strApellido,
                                                        $strTelefono,
                                                        $strEmail,
                                                        $strDireccion,
                                                        $strCuil
                    );
                    //algo aca esta caminando mal porquen o me deja validar el mail y dni para crear cuenta
                    if($request === false){
                            
                    }else{
                             $response = array('status' => true, 'msg' => 'Cliente registrado correctamente');
                    }
                    $code = 200;
                    jsonResponse($response, $code);
                    die();
                
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

           try {
               $method = $_SERVER['REQUEST_METHOD'];
               $response = [];
               if($method =="PUT"){
                    $response = array('status' => true, 'msg' => ' datos guardados correctamente', 'data'=> "");
                    $code = 200;
               }else{
                    $response = array('status' => false, 'msg' => 'error en la solicitud ' .$method);
                    $code = 400;
               }
               jsonResponse($response,$code);
               die();
           } catch (Exception $e) {
            echo "error en el proceso: ". $e->getmessage();
           }
           die();
        }


        public function eliminar($idcliente){

            echo "eliminar cliente".$idcliente;
        }



        
   

    }//end class home