<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Mundo</title>
</head>

<body>
    <p>La siguiente Linea esta hecha con PHP:</p>
    <p>
        <?php echo "Hola mundo"; ?>
    </p>
    <p>Esta linea tambien:</p>

    <?php
    echo "<p>HOLAAAA</p>";
    echo "<br>";
    print "ESto es otro parrafo jeje";
    print "<br>";
    //VARIABLES//
    //String:
    $nombre = "Juan";
    echo "Hola $nombre";
    $apellidos = "Gutierrez";
    echo " tu apellido es: $apellidos";

    //CONCATENAR STRINGS//
    echo "<br>";
    echo $nombre . " " . $apellidos;
    echo "<br>";
    echo "$nombre - $apellidos";
    //VARIABLES NUMERICAS//
    echo "<br>";
    $edad = 21;
    echo "<p>Tengo $edad años</p>";
    var_dump($edad);

    var_dump(PHP_VERSION);
    var_dump(__FILE__);

    //constantes//
    define("IVA_GENERAL", 0.21);
    const IVA_REDUCIDO = 0.08;
    $precio = 20.3;
    echo "<p>El precio con IVA es: " . $precio + $precio * IVA_GENERAL . "</p>";
    echo "<p>El precio con IVA reducido es: " . $precio + $precio * IVA_REDUCIDO . "</p>";


    $a = 5;
    $b = $a ** 10;  //doble asterisco para exponentes o potencias
    var_dump($b);
    $porcentage = $a % 2;
    var_dump($a);
    //incremento
    $a++;
    var_dump($a);
    //COMPARADORES

    $c = 5;
    $d= "5";

    $bool = $c == $d;
    //La respuesta es true porque compara el contenido, no el tipo (String / Int), para eso usamos tres iguales;

    $c = 5;
    $d= "5";
    $bool = $c === $d;

    var_dump($bool);

    





    ?>
</body>

</html>