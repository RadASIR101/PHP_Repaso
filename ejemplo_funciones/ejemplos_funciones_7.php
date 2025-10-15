<?php

// 2025-10-15

// importar funciones de otro archivo
// include "ejemplos_arrays_2.php";

// importar funciones de otro archivo
// require_once "ejemplos_arrays_2.php";

/**
 * Numero primo es el numero dividido entre si y la unidad
 */
function esPrimo($numero)
{
    if ($numero % 1 == 0 && $numero) {
        return true;
    }
    return false;
}


/**
 * 
 */
function esPrimoProfesor($numero)
{
    for ($i = 2; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            return false;
        }
        return true;
    }
}

echo esPrimoProfesor(13) ? "El numero es primo " : "El numero NO es primo";

# Programa que muestre todo los primos de 1 a 1000 
# primero sin usar la funcion anterior
# despues usando la funcion esPrimo()


$numero = 10;
for ($candidato = 2; $candidato < $numero; $candidato++) {
    $esPrimo = true;
    for ($i = 2; $i < $candidato; $i++) {
        if ($candidato % $i == 0) {
            $esPrimo = false;
        }
    }
    if ($esPrimo) echo "$candidato";
}

function getPrimos1000($numero, $candidato)
{
    $numero = 10;
    for ($candidato = 2; $candidato < $numero; $candidato++) {
        $esPrimo = true;
        for ($i = 2; $i < $candidato; $i++) {
            if ($candidato % $i == 0) {
                $esPrimo = false;
            }
        }
        if ($esPrimo) echo "$candidato";
    }
}

for ($candidato = 1; $candidato <= 10; $candidato++) {
    if (esPrimo($candidato)) echo "$candidato , ";
}


//----------------------

echo "<hr>";
echo "$variable";
$variable = 230;
