
<?php
class Libro {
    public $titulo;
    public $autor;
}

$libro = new Libro();
$libro->titulo = "1984";
$libro->autor = "George Orwell";

echo "Título: " . $libro->titulo . "<br>";
echo "Autor: " . $libro->autor;
?>

