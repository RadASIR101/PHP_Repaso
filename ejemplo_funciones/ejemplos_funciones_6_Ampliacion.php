<?php

// 2025-10-15

// importar funciones de otro archivo
// include "ejemplos_arrays_2.php";

// importar funciones de otro archivo
// require_once "ejemplos_arrays_2.php";


function calculadora_Match($signo, $numero1, $numero2)
{
    return match ($signo) {
        "+" => $numero1 + $numero2,
        "-" => $numero1 - $numero2,
        "*" => $numero1 * $numero2,
        "/" => ($numero2 != 0) ? $numero1 / $numero2 : "Error: División por cero",
        default => "Error: Operación no válida",
    };
}

function calculadoraReturn($signo, $numero1, $numero2)
{
    if ($signo == "/" && $numero2 == 0) {
        return "Error No se puede dividir por '0' ";
    }
    return match ($signo) {
        "+" => $numero1 + $numero2,
        "-" => $numero1 - $numero2,
        "*" => $numero1 * $numero2,
        "/" => ($numero2 != 0) ? $numero1 / $numero2 : "Error: División por cero",
        default => "Error: Operación no válida",
    };
}
