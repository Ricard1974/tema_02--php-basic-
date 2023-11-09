<?php

// Escriu una funció que determini la quantitat total a pagar per una trucada telefònica segons les següents premisses:
// Tota trucada que duri menys de 3 minuts té un cost de 10 cèntims.
// Cada minut addicional a partir dels 3 primers és un pas de comptador i costa 5 cèntims.

$minuts = $_GET['duracio'];

define("PREU_MINIM", 10);
define("PREU_ADICIONAL", 5);

function calcular_trucada($minuts)
{
    if ($minuts <= 3) { // minuts menys o igual a 3
        return PREU_MINIM; // 10 céntimos 3 minuts
    } else {
        $cost_adicional = ($minuts - 3) * PREU_ADICIONAL; // 5 centims per minut adicional
        return PREU_MINIM + $cost_adicional; // Cost total
    }
}

// $total_pagar = calcul_trucada($minuts);
// echo "Total a pagar es: " . $total_pagar . " centims";

?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>


    <div class="row g-3 m-5">
        <div class="col">

        </div>

        <div class="col bg-success text-white rounded text-center">
            <h1>
                <?php
                $total_pagar = calcular_trucada($minuts);
                echo "Total a pagar es: " . $total_pagar . " centims";
                ?>
            </h1>
        </div>

        <div class="col">


        </div>

    </div>
</body>

</html>