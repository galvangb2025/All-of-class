<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../styles/style.css">
    <style>

    </style>
</head>
<body>
    <?php 
    $students = [
    ["nombre" => "Ana García", "matematicas" => 8.5, "historia" => 7.0, "programacion" => 9.0],
    ["nombre" => "Luis Martínez", "matematicas" => 6.0, "historia" => 8.5, "programacion" => 7.5],
    ["nombre" => "Marta Rodríguez", "matematicas" => 9.0, "historia" => 6.5, "programacion" => 8.0],
    ["nombre" => "Carlos López", "matematicas" => 7.5, "historia" => 9.0, "programacion" => 6.5],
    ["nombre" => "Elena Torres", "matematicas" => 8.0, "historia" => 7.5, "programacion" => 9.5]
]; 
    ?>

    <table border="1">
        <thead>
            <tr>
                <th>
                    <p>Nombre</p>
                </th>
                <th>
                    <p>Matemáticas</p>
                </th>
                <th>Historia</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($students as $student) :
                # code...
            ?>
            <tr>
                <td>
                    <?= $student["nombre"]; ?>
                </td>
                <td class=" 
                    <?php 
                        if ($student["matematicas"] >= 8) {
                        echo "green";
                        }else{
                            echo "yellow";
                        }
                        if ($student["matematicas"] >= 9) {
                            echo " negrita";
                        }
                    ?>
                ">
                    <?= $student["matematicas"]; ?>
                </td>
                <td class="
                <?= $student["historia"] >= 8 ? "green" : "yellow" ?>
                <?= $student["historia"] >= 9 ? "negrita" : "" ?>   
                ">
                    <?= $student["historia"]?>
                </td>
            </tr>
            
            <?php 
            endforeach;         
            ?>
        </tbody>
    </table>
</body>
</html>