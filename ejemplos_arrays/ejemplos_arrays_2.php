<?php

# 2025-10-08

$nombres = ["Ana", "Juan"];

$nombres[1] = "Lola";

$nombres[] = "Vicente";

var_dump($nombres);

echo "<hr>";

$nombres[] = "Ines";

var_dump($nombres);

echo "<hr>";

for ($i = 0; $i < count($nombres); $i++) {
    echo "nombres[$i]" . " $nombres[$i] " . "<br>";
}

//--------

echo "<hr>";

$nombres[23] = "Federico";

var_dump($nombres);

echo "<hr>";

$nombre[] = "Ultimo por ahora";

var_dump($nombres);

echo "<hr>";

$nombre[13] = "Que pasara?";

var_dump($nombres);

echo "<hr>";

foreach ($nombres as $nombre) {
    echo " - " . $nombre . " ";
}
echo "<hr>";

foreach ($nombres as $indice => $valor) {
    echo " - " . $indice . " " . $valor;
}
echo "<hr>";


