<?php

$nota_estudiant = $_GET['nota'];

function grau_estudiant($n)
{
    if ($n >= 60) {
        return "Primera Divisió";
    } elseif ($n >= 45 && $n <= 59) {
        return "Segona Divisió";
    } elseif ($n >= 33 && $n <= 44) {
        return "Tercera Divisió";
    } else {
        return "Suspés";
    }
}

// $grau = grau_estudiant($nota_estudiant);
// echo "El grau és: " . $grau;


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
                $grau = grau_estudiant($nota_estudiant);
                echo "El grau és: " . $grau;
                ?>
            </h1>
        </div>

        <div class="col">


        </div>

    </div>
</body>

</html>