<?php
include "./restaurants.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Array de restaurantes</h1>
    <p>La direccion de Carpaccio es:</p>
    <?php
       echo $pinoccio[0]["address"];
    ?>
    <p>Número de camarerpos de Luigi</p>
    <?= $pinoccio[1]["Employees"][1]; ?>

    <p>El número de bebidas de Carpaccio</p>
    <?= $pinoccio[0]["quantity"]["drinks"] ?>

    <p>EL nombre de los dos restaurantes obtenidos con un bucle</p>
    <?php
        $x = 1; 
        foreach ($pinoccio as $p) {
        echo "<li>$x {$p["nombre"]} </li>";
        }
    ?>
    <p>Los empleados de ambos restaurantes</p>
    <?php
    foreach ($pinoccio as $p ) {
        //IMprimo el nombre del restaurante
        echo "{$p["nombre"]} ";
        //Imprimo el array de números employees
    }
    ?>
    <?php
    //fuuncion que recina un array asociativo, e imprima un una de las tablas las claves y el tipo de valor que tiene
    function clavesYTipos(array $array): string {
        $ret = '<table border="1" style="border-collapse: collapse; padding: 5px;">';
        $ret .= '<thead><tr><th>Clave</th><th>Tipo de valor</th></tr></thead>';
        $ret .= 'tbody>';

        // Guardaremos los tipos para cada clave única encontrada
        $mapaTipos = [];

        foreach ($array as $elemento) {
            if (is_array($elemento)) {
                foreach ($elemento as $key => $value) {
                    if (!isset($mapaTipos[$key])) {
                        $mapaTipos[$key] = gettype($value);
                    }
                }
            }
        }

        foreach ($mapaTipos as $clave => $tipo) {
            $ret .= "<tr>
                        <td><strong>{$clave}</strong></td>
                        <td>{$tipo}</td>
                    </tr>";
        }

        $ret .= '</tbody></table>';
        return $ret;
        }
        echo clavesYTipos($pinoccio);

    ?>


</body>
</html>