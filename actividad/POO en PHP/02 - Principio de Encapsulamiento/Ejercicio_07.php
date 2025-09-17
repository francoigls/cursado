<?php

class Libro {
    private $numeroPaginas;

    public function __construct($paginas) {
        $this->setPaginas($paginas);
    }

    public function getPaginas() {
        return $this->numeroPaginas;
    }

    public function setPaginas($paginas) {
        if ($paginas > 0) {
            $this->numeroPaginas = $paginas;
        }
    }
}

$libro = new Libro(300);
echo "Número de páginas: " . $libro->getPaginas() . "<br>";
?>