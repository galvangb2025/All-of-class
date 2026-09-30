<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COndicionales y bucles</title>
</head>
<body>
    <h2>Condicionales</h2>
<?php 
//bucles if
    $edad = 20;
    if ($edad < 18) {
        print("Eres menor de edad");
    }else {
        print("Eres mayor de edad");
    }
//operadores ternarios ? true : false
    $mesnaje = $age >= 18 ? "eres mayor" : "Eres menor" ;
    echo ("<br>");
    //Switch
    $dia = 2;
    switch($dia){
        case 1:
            print("Lunes");
            break;
        case 2:
            print("Es martes");
            break;
        case 3:
            print("Es  miercoles");
            break;
    }


$nombre = match ($dia) {
    1 => "Lunes",
    2 => "Martes",
    3 => "Miércoles",
    4 => "JUeves",
    5 => "Viernes",
    6 => "FIn de semana",
    default => "No válido",
};

    echo("<br>");
//BUCLES    
    for ($i=0; $i < 10; $i++) { 
        echo $i . ".";
    }
    echo("<br>");
    
    for ($i=0; $i < 100; $i++) { 
        if ($i % 7 == 0 && $i % 5 == 0) {
            print($i . " ");
        }
    }
        
    //traduce el for de arriba a un while
            echo("<br>");
    $a = 0;
    while ($a <= 100) {
        if ($a % 7 == 0 && $a % 5 == 0) {
            echo($a . "");
            $a++;
        }
    }

    
    


?>

</body>
</html>