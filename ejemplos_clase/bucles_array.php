<?php

## REPASO DE FOR con array - MIOS

// version antigua
$numeros = array("1a", "2b", "3c", "4d");

echo $numeros[0];
echo "<hr>";


for ($i = 1; $i <= 10; $i++) {
    echo "Valores " . $i . " <br> ";
}

echo "<hr>";

$numeros = ["1a", "2b", "3c", "4d"];

echo $numeros[1];

echo "<hr>";

$persona = [
    "nombre" => "Juan",
    "edad" => 30,
    "ciudad" => "Madrid"
];

echo $persona["nombre"]; // Juan