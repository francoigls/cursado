<?php

    require_once ("ClassPersona.php");

    class Cliente extends Persona{

        protected $fltCredito;

         function __construct(int $dni, string $nombre, int $edad){

            parent::__construct($dpi, $nombre, $edad);
        }

        public function setcredito(string $fltCredito){
            $this->fltCredito = $fltCredito;
        }
         public function getcredito():string{
            return $this->fltCredito;
        }

    }// end class Cliente