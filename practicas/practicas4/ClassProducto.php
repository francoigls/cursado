<?php

    class Producto{
        
        public $strDescripcion;
        public $fltPrecio;
        protected $intStockMinimo = 10;
        protected $strStatus = "Activo";


        public function __construct(string $Descripcion, float $Precio){
                $this->strDescripcion = $Descripcion;
                $this->fltPrecio = $Precio;
        }

        public function getInfoProducto(){

                $arrProducto = array('producto' => $this->strDescripcion,
                                     'precio' => $this->fltPrecio,
                                     'stock_minimo' => $this->intStockMinimo,
                                     'Estado' => $this->strStatus,    
                
        );
        return $arrProducto;

        }

    }//end class Producto