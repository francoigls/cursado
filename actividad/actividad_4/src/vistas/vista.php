<?php
namespace Vistas;
use Contratos\Renderable;

class Vista implements Renderable {

    public function renderizar() {
        echo "Renderizando la vista";
    }
}
