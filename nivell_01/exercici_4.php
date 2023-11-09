<?php

$n_final = $_GET['n1'];
$salto = $_GET['n2'];

function contador($n_final, $salto)  {
    for ($i = 1; $i <= $n_final; $i += $salto) {
        echo ($i -1) . "<br/>";
    }
};
// echo "Se va a contar hasta el numero :".$n_final. "<br/>";
// echo "Se va a contar de ".$salto." en ".$salto. "<br/>";
// contador($n_final,$salto);



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
            <h2>
                <?php
                echo "Hasta el numero :".$n_final. "<br/>";
                echo "<h2>Se va a contar de ".$salto." en ".$salto. "</h2><br/>";
                contador($n_final=10,$salto);
                ?>
            </h2>
        </div>
        
        <div class="col">


        </div>

    </div>
</body>

</html>