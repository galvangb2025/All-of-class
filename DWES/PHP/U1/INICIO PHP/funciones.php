<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Funciones</h1>
    <?php
    //Funcion que reciba un array de notas y devuelve la cantidad de personas aprobadas
    function aprobadas($notas): int{
        $apr= 0;
        foreach ($notas as $n){
            if ($n >= 5) {
                $apr++;
            }
        }
        return $apr;
    }
    $notas= [4.0, 5.1, 3.1, 7.1, 9.4];
    echo aprobadas($notas);
    var_dump(aprobadas($notas));

    echo "<br>";

    //funcion que reciba dos strings y devuelva la concatenacion de los dos
    function joinStrings($s1, $s2): string{
            return $s1 . $s2;
    }
        echo joinStrings("hola", "adios");  
    // Parametros con valores por defeco
    //Saludar: si recibe un parametro (el nombre: XXXX), que devuelva "Hola, XXXX"
    //         si recibe dos parametros (nombre: XXXX y saludo (YYYYY), que devuelva "YYYYY, XXXX"
    

    function saludar($nombre, $saludo = "Hola"):string{
        return "$saludo, $nombre";
    }
    echo "<br>";
    echo saludar("Juan");
    echo "<br>";
    echo saludar("Juan", "BUenos días");
    
    
    //FUncion que reciba un array indexado de numeros, y un segundo parametro de tipo bool
    //si es true que lo devuelva ordenador de mayor a menor
    //si es false al reves
    function ordenar($nums, $ord) : array{
        if ($ord) {
            rsort($nums);
        }else{
            asort($nums);
        }
        return $nums;
    }

    

    var_dump(ordenar([8, 3424, 6165], true));
    var_dump(ordenar([14, 24, 14], true));
    var_dump(ordenar([4, 567, 24], false));

    echo "<br>";
    //funcion que recive una cantidad indeterminada de numeros y devuelve la suma de todos ellos

    function suma(...$nums){
        //Aqui dentro $nums es un array que contiene todos los parametros
        return array_sum($nums);
    }
    echo suma(1,48564156,10,15,61856,1,185,6);
    
function aumenta($a){
    $a++;
    return $a;
}


    ?>
</body>
</html>