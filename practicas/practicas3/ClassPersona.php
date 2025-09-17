<?php

    class Persona{

        public $intDni;
        public $strNombre;
        public $intEdad;

        function __construct(int $dni, string $nombre, int $edad){

            $this->intDni = $dni;
            $this->strNombre = $nombre;
            $this->intEdad = $edad;

        }
            public function getDatoPersonales(){


                $datos = "
                <h2>DATOS PERSONALES</H2>
                DnI: {$THIS->intDni} <br>
                Nombre: {$THIS->strNombre} <br>
                Edad: {$THIS->intEdad} <br>
                ";

                return $datos;
            }


        


    };//end class persona