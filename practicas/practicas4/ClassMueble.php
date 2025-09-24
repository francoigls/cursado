<?php
    require_once ("Classproducto.php");

    class Mueble extends Producto{

        public $strColor;
        public $strMaterial;
        public $strStatus = "AGOSTADO";

        public function __construct(string $Descripcion, float $Precio, string $marca, string $color, string $material){
                parent::__construct($Descripcion, $precio);

                $this->strMateria = $material;
                $this->strColor = $color;

    }

         public function getInfoProducto(){

                $arrProducto = array('producto' => $this->strDescripcion,
                                     'precio' => $this->fltPrecio,
                                     'stock_minimo' => $this->intStockMinimo,
                                     'Estado' => $this->strStatus,  
                                     'color' => $this->strColor,
                                     'materia' => $this->strMaterial  
                
        );
        return $arrProducto;

        }

}//end class mueble