<?php 
namespace Modelos;


class Usuario {

    public $name;
public function DecirHola(){

    return "hola desde usuario" ;
}

public function ObtenerNombres(){
    return $this.$name;
}

};


?>