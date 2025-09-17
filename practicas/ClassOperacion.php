<?php

    class Operacion{

        public $cantidadUno = 0;
        public $cantidadDos = 0;
        public $resultado = 0;

        function __construct($intCant1, $intCant2){

                $this->cantidadUno = intCant1;
                $this->cantidadDos = intCant2;
        }

        
        
        public function GetSuma(){
            $this->resultado = $this->cantidadDos + $this->cantidadDos;
            return $this->resultado;
            
        }


        public function GetResta(){
             $this->resultado = $this->cantidadDos - $this->cantidadDos;
            return $this->resultado;
            
        }

        public function GetMultiplicacion(){
             $this->resultado = $this->cantidadDos * $this->cantidadDos;
            return $this->resultado;
        }

        public function GetDivision(){
             $this->resultado = $this->cantidadDos / $this->cantidadDos;
            return $this->resultado;
        }
        
    };//end class operacion
