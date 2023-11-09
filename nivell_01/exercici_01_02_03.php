<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Ejercicio 1</h1>
    <?php


    define("PI", 3.1415); // constante
    $integro = 21;  // numero integro
    $double = 11.12; // doble
    $string = "Soy un string"; // String
    $salida = true; // Boleano en True
    $entrada = false; // Boleano en falso
    $ar = array("Madre", "Padre", "Hermano", "Hermana");

    define("NOM", "Ricard"); // constante




    print_r($ar); // impresion por pantalla del array
    echo "<p>Valor string=" . $string . "</p>";
    echo "<p>Valor Double o float=" . $double . "</p>";
    echo "<p>Valor Integro=" . $integro . "</p>";
    echo "<p>Valor Boleano=" . $entrada . " <- Si es falso no imprime</p>";
    echo "<p>Valor Boleano=" . $salida . " <- Si es true imprime 1</p>";
    echo "<p>Constante=" . NOM . "</p>";



    // $minumero= 0;

    // while($minumero < 10){
    //     echo $minumero. "<br/>";
    //     $minumero++;
    // };

    // for($n=1; $n <=10; $n++){
    //     echo $n . "<br/>";
    // }

    ?>
    <h1>Ejercicio 2</h1>
    <?php

    $hola = "Hello world";
    $nVariable = "Aquest és el curs de PHP";
    echo $hola;
    echo "<br/>";
    echo strtoupper($hola);
    echo "<br/>";
    echo strrev("Hello World");
    echo "<br/>";
    echo "Palabras=" . strlen($hola);
    echo "<br/>";
    echo $hola . " " . $nVariable


    ?>



    <h1>Ejercicio 3</h1>
    <?php
    $x = 4; // Int
    $y = 5; // Int
    $n = 2.22; // Float
    $m = 4.44; // Float

    echo "Valor de x= " . $x;
    echo "<br/>";
    echo "Valor de y= " . $y;
    echo "<br/>";
    echo "Valor de n= " . $n;
    echo "<br/>";
    echo "Valor de m= " . $m;
    echo "<br/>";
    echo "La suma de " . $x . "+" . $y . "=" . $x + $y;
    echo "<br/>";
    echo "La resta de " . $x . "-" . $y . "=" . $x - $y;
    echo "<br/>";
    echo "El producte de " . $x . "*" . $y . "=" . $x * $y;
    echo "<br/>";
    echo "El modul de " . $x . "%" . $y . "=" . $x % $y;
    echo "<br/>";
    echo "La suma de " . $n . "+" . $m . "=" . $n + $m;
    echo "<br/>";
    echo "La resta de " . $n . "-" . $m . "=" . $n - $m;
    echo "<br/>";
    echo "El producte de " . $n . "*" . $m . "=" . $n * $m;
    echo "<br/>";
    echo "El modul de " . $n . "%" . $m . "=" . $n % $m;
    echo "<br/>";
    echo "Doble" . $x . "=" . $x * 2;
    echo "<br/>";
    echo "Doble" . $y . "=" . $y * 2;
    echo "<br/>";
    echo "Doble" . $n . "=" . $n * 2;
    echo "<br/>";
    echo "Doble" . $m . "=" . $m * 2;
    echo "<br/>";
    echo "Suma variables = " . ($x + $y + $n + $m);
    echo "<br/>";
    echo "Producto variables = " . ($x * $y * $n * $m);




    ?>
</body>

</html>