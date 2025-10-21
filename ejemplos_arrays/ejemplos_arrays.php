<?php

echo "2025-10-07";

$numeros = [1, 2, 3, 4, 5, 6];
echo $numeros[1];
echo $numeros[3];

for ($i = 0; $i < count($numeros); $i++) {
    echo $numeros[$i] . " <br>";
}

echo count($numeros);


$cads = ["Manolo", "Juan", "Ana", "Pedro", "Pepe", "Ines"];

for ($i = 0; $i < count($numeros); $i++) {
    echo $numeros[$i] . " <br>";
}


for ($i = 0; $i < count($cads); $i++) {
    echo $cads[$i] . " <br>";
}

echo "<br>";

$indice = 0;
while ($indice < count($cads)) {
    echo $cads[$indice] . " <br>";
    $indice++;
}


