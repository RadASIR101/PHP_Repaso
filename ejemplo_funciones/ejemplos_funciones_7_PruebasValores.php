<?php

$valor1 = 1;
$valor2 = 2;

echo $valor1 = 1;
echo "<br>";
echo $valor2 = 2;
echo "<br>";

function setValor()
{
    $valor1 = 5;
    $valor2 = 10;
}


setValor();

echo $valor1;
echo "<br>";
echo $valor1;
echo "<br>";
