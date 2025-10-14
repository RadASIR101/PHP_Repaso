<?php

// 2025-10-08

// importar funciones de otro archivo
// include "ejemplos_arrays_2.php";

// importar funciones de otro archivo
// require_once "ejemplos_arrays_2.php";


$filas = 12;
$columnas = 14;

echo "<table align='center' border='2'>";
for ($f = 0; $f < $filas; $f++) {
    echo "<tr>";
    for ($c =  0; $c < $columnas; $c++) {
        echo "<td>A</td>";
    }
    echo "</tr>";
}
echo "</table>";


echo "<hr>";

function setTabla($filas, $columnas)
{
    echo "<table align='center' border='2'>";
    for ($f = 0; $f < $filas; $f++) {
        echo "<tr>";
        for ($c =  0; $c < $columnas; $c++) {
            echo "<td>A</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

setTabla(3, 4);

echo "<hr>";

function getSaludo()
{
    echo "<hr>";
    echo "Hello Friend";
}

getSaludo();

/**
 * Función que saluda con el nombre que se le pasa como parámetro
 * @param string $nombre Nombre de la persona a saludar
 * @return void
 * 
 */
function saludarConNombre($nombre)
{
    echo "<hr>";
    echo "Hello $nombre";
}
saludarConNombre("Juan");


// Procedimientos en PHP
function sumar($a, $b)
{
    $suma = $a + $b;
    echo "<hr>";
    echo "La suma de $a + $b es $suma";
}

// Metodos en PHP
function sumar2($a, $b)
{
    $suma = $a + $b;
    return $suma;
}


// funciones en PHP se utilizan para devolver valores
$resultado = sumar2(5, 8);
echo "<hr>";
echo "El resultado de la suma es $resultado";
echo "<hr>";

$numero1 = sumar2(1, 2);
$numero2 = sumar2(1, 2);

function getSumaTotal($numero1, $numero2)
{
    $total =  $numero1 + $numero2;
    return $total;
    echo "<hr>";
}



echo getSumaTotal(random_int(1, 10), $numero2);
echo "<hr>";

// Metodos en PHP
function sumar3($a, $b)
{
    $suma = $a + $b;
    return $suma;
}

echo getSumaTotal(sumar3(5, 6), $numero2);
echo "<hr>";


function calculadora($signo, $numero1, $numero2)
{
    switch ($signo) {
        case "+":
            return $numero1 + $numero2;
        case "-":
            return $numero1 - $numero2;
        case "*":
            return $numero1 * $numero2;
        case "/":
            if ($numero2 != 0) {
                return $numero1 / $numero2;
            } else {
                return "Error: División por cero";
            }
        default:
            return "Error: Operación no válida";
    }
}



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

$numero1 = 2;
$numero2 = 5;

echo calculadora_Match("+", $numero1, $numero2);
echo "<hr>";
echo calculadora_Match("-", $numero1, $numero2);
echo "<hr>";
echo calculadora_Match("*", $numero1, $numero2);    
echo "<hr>";
echo calculadora_Match("/", $numero1, $numero2);
echo "<hr>";
echo calculadora_Match("/", $numero1, 0);
echo "<hr>";
echo calculadora_Match("%", $numero1, $numero2);
echo "<hr>";