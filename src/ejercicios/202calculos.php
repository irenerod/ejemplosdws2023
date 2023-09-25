<?php

/*
 * 202calculos.php:
 * Escribe un programa que utilice las variables $x y $y.
 * Recibe los valores con GET mediante URL.
 * A continuación, muestra por pantalla el valor de cada variable, la suma, la resta, la división y la multiplicación.
*/

    $variable1=$_GET['numero1']; //array disociativo, no se define por número si no por valor
    $variable2=$_GET['numero2'];

    echo "La suma de los valores es: " .$variable1+$variable2."<br>";
    echo "La resta de los valores es: " .$variable1-$variable2."<br>";
    echo "La multiplicación de los valores es: " .$variable1*$variable2."<br>";

        if($variable1==0) { //=== compara mismo valor y mismo tipo (numérico vs texto)
            echo "No se puede realizar la división por denominador igual a cero"."<br>";
        }else{
            echo "La división de los valores es: " .$variable1/$variable2."<br>";

        }

?>

<html>
    <head>
        <title>Ejercicio 2</title>
    </head>
    <body>
        <p></p>
    </body>
</html>
