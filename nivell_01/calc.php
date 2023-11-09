<?php
$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
$operador = $_GET['operador'];

if ($operador == "+") {
    $res = $n1 + $n2;
} else if ($operador == "-") {
    $res = $n1 - $n2;
} else if ($operador == "*") {
    $res = $n1 * $n2;
} else if ($operador == "/") {
    $res = $n1 / $n2;
}

// switch ($operador) {
//     case "+":
//         $res = $n1 + $n2;
//         break;
//     case "-":
//         $res = $n1 - $n2;
//         break;
//     case "*":
//         $res = $n1 * $n2;
//         break;
//     case "/":
//         $res = $n1 / $n2;
//         break;
//     default:
//         echo "Operador no válido";
// }


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
                echo "Resultado: <b> " . $res . "</b>";
                ?>
            </h1>
        </div>
        
        <div class="col">


        </div>

    </div>
</body>

</html>