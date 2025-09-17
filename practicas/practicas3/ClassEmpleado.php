<?php

    require_once ("ClassPersona.php");

    class Empleado extends Persona{

        protected $strPuesto;

         function __construct(int $dni, string $nombre, int $edad){

            parent::__construct($dpi, $nombre, $edad);
        }

        public function setpuesto(string $puesto){
            $this->strPuesto = $puesto;
        }
         public function getpuesto():string{
            return $this->strPuesto;
        }

    }// end class empleado