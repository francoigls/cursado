<?php

    require_once ("ClassOperacion.php");


    $operacion1 = new Operacion(10,2);


    $TotalSuma = $operacion1->GetSuma();
    echo "total suma: ".$TotalSuma;
    echo "<br>";

    $TotalResta = $operacion1->GetResta();
    echo "total resta: ".$TotalSuma;
    echo "<br>";
    
    $TotalDivision = $operacion1->GetDivision();
    echo "total division: ".$TotalSuma;
    echo "<br>";
    
    $TotalMultiplicacion = $operacion1->GetMultiplicacion();
    echo "total multiplicacion: ".$TotalSuma;
    echo "<br>";
    






?>