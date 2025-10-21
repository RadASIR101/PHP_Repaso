<?php

// 2025-10-15

function incrementaValor1(int $a): int
{
    return $a++;
}

echo incrementaValor1(12);

/**
 * 
 */
function incrementaValor2(int $a): int
{
    return ++$a;
}

echo incrementaValor2(12);

/**
 * 
 */
function incrementaValor3(int $a): int
{
    return $a + 1;
}

echo incrementaValor3(12);

/**
 * @param int $numero
 * @return bool
 * 
 */
function esPrimo(int $numero): bool
{
    if ($numero <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}

/**
 * Ambito doble
 * @param int|float $numero
 * @return bool
 * 
 */
function esPrimoAmbitoDoble(int|float $numero): bool
{
    if ($numero <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}

/**
 * 
 */
function esPrimoAmbitoMezcla(int|bool $numero): bool
{
    if ($numero <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}

echo esPrimoAmbitoMezcla(13);
echo esPrimoAmbitoMezcla(false);
