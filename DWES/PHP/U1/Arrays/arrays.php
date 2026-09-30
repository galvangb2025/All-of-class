<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays simples</title>
</head>
<body>
    <h1>Arrays</h1>
    <?php
    $cars = array("Seat", "Audi", "BMW");
    $food = ["Tomate" , "Aguacate", "Zanahoria"];

    //QUiero añadir otra comida: berenjena

    $food[3] = "Berenjena";
    $food[3] = "Berenjena"; //SObreescribe

    $food[] = "zucchini";
    //Recorrer el array o imprimirlo


    foreach ($food as $f) {
        echo"$f <br>";
    }


                echo("<br>");
    //Arrays asociativos//
    ?>

    <?php
    $capitales = [

    "Ecuador" => "Quito",
    "España" => "Madrid",
    "Noruega" => "Oslo",
    "Colombia" => "Bogota"
    ];

    echo "<p>La capital de Noruega es" . " ".$capitales["España"]. "</p>";
    //echo "<p>La capital de Noruega es" . $capitales['2']. "</p>";//



    echo("<br>");



    echo count($capitales);
    //metemos una

    $capitales["Colombia"] = "Bogota";





    ?>
</body>
</html>