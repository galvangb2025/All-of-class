<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--//Declara una variable llamada number. Muestra en una tabla (con bordes) la tabla de multiplicar de dicho número. La primera fila de la tabla es de títulos. Por ejemplo, si numero=7:  -->
    <table border="1">
        <thead>
            <tr>
                <td>a</td>
                <td>b</td>
                <td>resultado</td>
            </tr>
        </thead>
        <tbody>
            <?php 
            for ($b=0; $b <= 10; $b++) {
                $a = 7; 
                echo "<tr>";
                    echo "<td>" . $a . "</td>";
                    echo "<td>" . $b . "</td>";
                    echo "<td>" . ($a *  $b) . "</td>";
                echo "</tr>";
            }            
            ?>
        </tbody>
    </table>
    <p>__________________</p>

    <!-- Crea un programa que imprima 20 cifras de la secuencia Fibonacci, separados por comas, en un mismo párrafo todos ellos. -->
    <p>
    <?php 
        $num1 = 0;
        $num2 = 1;
        for ($i=0; $i <20 ; $i++) { 
            echo ($num1 + $num2) . ",";
            $num1++;
            $num2++;
        }
    
    
    ?>
    </p>
    <p>__________________</p>
<!-- Crea un programa que dados los valores de dos variables, rows y columns, imprima una matriz con tantas filas y columnas como digan dichas variables con el símbolo *. Por ejemplo, si rows=3 y columns=5 -->

    <?php   
        
    $rows = 5;  
    $columns = 6;   
    for ($i=0; $i <$rows ; $i   ++) { 
        for ($j=0; $j <$columns ; $j++) { 
            echo("*");  
        }   
        echo "<br>";    
    }   
    ?>  
    <p>__________________</p>   

<!-- Dado un valor en la variable number, imprime una pirámide como en el ejemplo. Si number=5 -->
    <?php
    $number = 8;
    for ($i=1; $i <= $number ; $i++) { 
        for ($j=0; $j <=$i ; $j++) { 
            echo $j . " ";
        }
        echo "<br>";
    }
    ?>
    <p>__________________</p>   


</body>
</html>
