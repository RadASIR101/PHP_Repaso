<?php

// 2025-10-15

function incrementaValor1($a)
{
    return $a++;
}

function incrementaValor2($a)
{
    return ++$a;
}

function incrementaValor3($a)
{
    return $a + 1;
}

echo incrementaValor1(12);
echo incrementaValor2(12);
echo incrementaValor3(12);

## Ambitos de la funciones

function incrementaValor($a)
{
    $a++;
    $manolo = "Admin";
    echo "<br> Valor de a dentro de la funcion: $a";
    echo "<br> Valor de manolo dentro de la funcion: $manolo";
}

// Variable local
$a = 12;
incrementaValor($a);
echo "<br> Valor de a fuera de la funcion: $a";
// echo "<br> Valor de manolo fuera de la funcion: $manolo"; // Error
// manolo no existe fuera de la funcion
// $a no se ha modificado fuera de la funcion
// $a es una variable local de la funcion incrementaValor
// $a es una variable global

echo "<hr>";

$a = 3;

function valorPorReferencia1(&$a)
{
    echo "<br> Valor de a dentro de la funcion: $a";
    $a = 10;
}

echo valorPorReferencia1($a);
echo "<br> • Valor de a fuera de la funcion: $a";
echo "<hr>";

$b = 5;

function valorPorReferencia2(&$b)
{
    echo "<br> Valor de b dentro de la funcion: $b";
    $b++;
}

echo valorPorReferencia2($b);
echo "<br> ♦ Valor de b fuera de la funcion: $b";
echo "<hr>";

// Variables globales
$varGlobal = "Soy una variable global";
function pruebaGlobal()
{
    global $varGlobal; // para usar la variable global dentro de la funcion
    echo "<br> Valor de varGlobal dentro de la funcion: $varGlobal";
}

function pruebaGlobal2()
{
    global $nombreVariable; // para usar la variable global dentro de la funcion
    $nombreVariable;
}


function pruebaGlobalSuper()
{
    echo "<br> Valor de varGlobal dentro de la funcion: " . $GLOBALS['varGlobal'];
}

pruebaGlobal();
pruebaGlobal2();
pruebaGlobalSuper();

echo "<br> Valor de varGlobal fuera de la funcion: $varGlobal";

echo "<hr>";
