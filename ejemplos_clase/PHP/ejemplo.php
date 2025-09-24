<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <h2>Primera pagina 2</h2>
    </center>
    <hr>

    <?php

    // variables 
    $numero1 = 20;
    $numero2 = 0;
    $resultado = $numero1 + $numero2;
    echo "<br />";
    echo "El resultado de la suma de $numero1 y $numero2 es : $resultado";
    echo "Hola mundo desde PHP <br> ";
    echo "Adios mundo" . "<br>" . "hola vez";
    echo "<br />";

    ?>

    <?= "Hola mundo desde PHP" . "<br>" . "Adios mundo" . "<br>" . "hola vez"; 
    // forma abreviada de escribir php
    ?>

</body>

</html>

<!-- Ruta : http://localhost/ejemplo1/ejemplo.html -->

<?php

$numero1 = 2;
$numero2 = 3;
$resultado = $numero1 + $numero2;
echo "El resultado de la suma es: ";
echo "<br /> ";
echo $resultado;
?>