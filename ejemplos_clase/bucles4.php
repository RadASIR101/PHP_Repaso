<?php

echo date("Y-m-d");

// suma todos lso numero del 1 hasta 100

// Acumuladores

echo "<br>";
$acumulador = 0;

for ($i = 1; $i <= 100; $i++) {
    $acumulador += $i;
}
echo "\n El valor es : " . $acumulador;


echo "<br>";

$producto = 1;
$numero =  10;

for ($i = 1; $i <= $numero; $i++) {
    $producto *= $i;
}
echo "\n El valor es : " . $producto;

