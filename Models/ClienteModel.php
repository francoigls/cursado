<?php

    class ClienteModel extends Mysql{


        private $intIdCliente;
        private $strDni;
        private $strNombre;
        private $strApellido;
        private $strTelefono;
        private $strEmail;
        private $strDireccion;
        private $strCuil;
        private $intStatus;
    



        public function __construct(){
    
            parent::__construct();
        }

        //verificacion de email  y dni
        public function setCliente(string $Dni,string $Nombre,string $Apellido,int $Telefono,string $Email,string $Direccion,string $Cuil){
            $this->strDni = $Dni;
            $this->strNombre = $Nombre;
            $this->strApellido = $Apellido;
            $this->strTelefono = $Telefono;
            $this->strEmail = $Email;
            $this->strDireccion = $Direccion;
            $this->strCuil = $Cuil;

            

            $sql = "SELECT dni,email FROM persona WHERE(email = :email or dni = :Dni)";
            $arrParams = array(":email" => $this->strEmail,
                               ":Dni"=> $this->strDni,
        );
        $request = $this->select($sql,$arrParams);
        //dep($request); 
        
        
        
        
        //insert a la base de datos 
        if(!empty($request)){
            return false;
        }else{
            $query_insert="INSERT INTO PERSONA(dni,nombre,apellido,telefono,email,direccion,cuil)
                          VALUES(:Dni, :nom, :apell, :tel, :email, :direc, :cuil)  
                          ";
            $arrData = array(":Dni"=> $this->strDni,
            ":nom"=> $this->strNombre,
            ":apell"=> $this->strApellido,
            ":tel"=> $this->strTelefono,
            ":email"=> $this->strEmail,
            ":direc"=> $this->strDireccion,
            ":cuil"=> $this->strCuil
        );
        $request_insert = $this->insert($query_insert,$arrData);
        return $request_insert;
    }
    
}
    
    
    
    
}//end class
