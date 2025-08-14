### Variables y Tipos de Datos

Declara variables de tipo entero, flotante, cadena y booleano, y muestra sus valores y tipos usando `var_dump()`.
Escribe un script que reciba un número a través de una variable, lo multiplique por 2 y muestre el resultado.

<?php
$cadena = "franco";
$flotante = 1.22;
$booleano = false;
$entero = 24;

echo "<h3>Tipos de datos con var_dump()</h3>";
var_dump($cadena);
echo "<br>";
var_dump($flotante);
echo "<br>";
var_dump($booleano);
echo "<br>";
var_dump($entero);
echo "<br>";

?>

### Operadores

Crea un script que realice operaciones aritméticas básicas (suma, resta, multiplicación y división) y muestre cada resultado.
Desarrolla un script que compare dos números usando operadores de comparación y muestre cuál es mayor o si son iguales.
Implementa un script que concatene dos cadenas y las imprima en una sola línea.

<?php

$a = 4;
$b = 5;
$c = 2;


$suma = $a + $b;
$resta = $b - $c;
$multiplicacion = $c * $a;
$division = $a / $c;


$esMayor = $b > $a;


$cadena1 = "hola";
$cadena2 = " soy franco";
$cadenas = $cadena1 . $cadena2;


echo "<h3>Operaciones Aritméticas</h3>";
echo "Suma: $suma<br>";
echo "Resta: $resta<br>";
echo "Multiplicación: $multiplicacion<br>";
echo "División: $division<br>";

echo "<h3>Comparación</h3>";
echo ($esMayor ? "$b es mayor que $a" : "$a es mayor o igual que $b") . "<br>";

echo "<h3>Concatenación</h3>";
echo $cadenas;

?>
### Estructuras de Control

Escribe un script que, mediante una estructura `if-else`, verifique si una variable de edad es mayor o igual a 18 y muestre "Mayor de edad" o "Menor de edad" según corresponda.
<?php
if ($edad >= 18){
    echo "Mayor de edad";
} else {
    echo "Menor de edad";
}
?>


Crea un bucle `for` que imprima en pantalla los números del 1 al 20.

<?php
echo "<h3>Números del 1 al 20 (for)</h3>";
for ($i = 1; $i <= 20; $i++) {
    echo $i . "<br>";
}
?>

Desarrolla un script usando un bucle `while` que sume los números del 1 al 50 y muestre la suma total.
<?php
echo "<h3>Suma de los números del 1 al 50 (while)</h3>";
$contador = 1;
$suma = 0;

while ($contador <= 50) {
    $suma += $contador;
    $contador++;
}

echo "La suma total es: $suma";
?>



Implementa un bucle `foreach` que recorra un array de nombres y los imprima en una lista HTML.
<?php
echo "<h3>Lista de nombres (foreach)</h3>";

$nombres = ["Lucía", "Franco", "Carlos", "Valentina", "Martín"];

echo "<ul>";
foreach ($nombres as $nombre) {
    echo "<li>$nombre</li>";
}
echo "</ul>";
?>


Escribe un script utilizando `switch` que, en función de una variable de día de la semana (como número), imprima el nombre correspondiente (por ejemplo, 1: Lunes, 2: Martes, etc.).


<?php
echo "<h3>Día de la semana (switch)</h3>";

$diaNumero = 3;

switch ($diaNumero) {
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miércoles";
        break;
    case 4:
        echo "Jueves";
        break;
    case 5:
        echo "Viernes";
        break;
    case 6:
        echo "Sábado";
        break;
    case 7:
        echo "Domingo";
        break;
    default:
        echo "Número de día inválido";
}
?>