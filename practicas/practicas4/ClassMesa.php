<?php

    require_once("Classmueble.php");

    class  Mesa extends Mueble{

        private $strForma = "";
        protected $strTamanio;

        public function __construct(string $Descripcion, float $Precio, string $marca, string $color, string $material, string $tamanio){

            prent::__construct($Descripcion, $Precio, $marca, $color, $material);
            $this->strTamanio =$tamanio;
        }

        public function setforma(string $forma){
            $this->strForma = $forma;
        }

        
         public function getInfoProducto(){

                $arrProducto = array('producto' => $this->strDescripcion,
                                     'precio' => $this->fltPrecio,
                                     'stock_minimo' => $this->intStockMinimo,
                                     'Estado' => $this->strStatus,  
                                     'color' => $this->strColor,
                                     'materia' => $this->strMaterial,
                                     'tamanio' => $this->strTamanio,
                                     'forma' => $this-> strForma

                
        );
        return $arrProducto;

        }
        }//end class

    