<?php

$variavble1 = 2;
$variable2 = 3;

// generar numero aleatorio
$numero_aleatorio = rand(1, 10);

echo "El numero aleatorio es: $numero_aleatorio <br />";

for ($i = 1; $i <= 10; $i++) {
    echo "El valor de i es: $i <br />";
}

if ($variavble1 > $numero_aleatorio) {
    echo "El numero 1 es mayor que el numero 2";
} else {
    echo "El numero 2 es mayor que el numero 1";
}

// no lo cerrare pues esta pagina solo tendrá codigo PHP
// si se cierra el archivo con - se puede generar un error de cabecera 
