<?php

echo date('Y-m-d');

echo "<hr>";
echo "**Ejercicio 1**<br>";
echo "# Imprimir los números del 1 al 10 usando un bucle for <br>";

for ($i = 1; $i <= 10; $i++) {
    echo $i . " | ";
}

echo "<hr>";
echo "# **Ejercicio 2**<br>";
echo "# Imprimir los números pares del 2 al 20 usando un bucle for <br>";

for ($i = 1; $i <= 10; $i++) {
    echo " " . $i * 2;
}

echo "<hr>";
echo "# **Ejercicio 3**<br>";
echo "Calcular y mostrar la suma de los primeros 15 números naturales <br>";

$acumulador =  0;

for ($i = 0; $i <= 15; $i++) {
    $acumulador += $i;
}
echo $acumulador;

echo "<hr>";
echo "**Ejercicio 4**<br>";
echo "Imprimir la tabla de multiplicar del 5 (del 5×1 al 5×10)<br>";

echo "<br>";
$numero5 = 5;
for ($i = 1; $i <= 10; $i++) {
    echo $i . " * " . $numero5 . " = " . $i * $numero5;
    echo "<br>";
}

echo "<hr>";
echo "**Ejercicio 5 **<br>";
echo "Imprimir los números impares del 1 al 30 en orden descendente <br>";

echo "<br>";

for ($i = 1; $i <= 30; $i++) {
    if ($i % 2 == 1) {
        echo "|" . "$i " . " ";
    }
}

echo "<br>";

for ($i = 30; $i >= 1; $i--) {
    if ($i % 2 != 0) {
        echo "|" . " $i " . " ";
    }
}

echo "<br>";

for ($i = 29; $i >= 1; $i -= 2) {
    echo "|" . " $i " . " ";
}

echo "<hr>";
echo "**Ejercicio 6**<br>";
echo "Calcular el factorial de un número dado (por ejemplo, 7).<br>";


$factorial = 7;
$resultado = 7;

for ($i = 1; $i < 7; $i++) {
    $factorial -= 1;
    $resultado *= $factorial;
}
echo $resultado;
echo "<br>";

echo "<hr>";
echo "**Ejercicio 7**<br>";
echo "Imprimir una secuencia de números que comience en 100 y disminuya de 5 en 5 hasta llegar a 50.";

echo "<hr>";

$numeros100 = 100;
$disminuye100 = 100;

echo "Total : " . $num = ($numeros100 / 2);
echo "<br>";
for ($i = 0; $i <= $numeros100; $i++) {
    if ($disminuye100 >= $num) {
        echo " " . $disminuye100;
        $disminuye100 -= 5;
    }
}

echo "<hr>";
echo "**Ejercicio 8**<br>";
echo "# Mostrar las potencias de 2 desde 2^0 hasta 2^10 <br>";

$potencia2 = 2;
$acumulado = 1;

for ($i = 0; $i < 10; $i++) {
    if ($i == 0) {
        echo " 2^ $i =  " . $acumulado *= 1;
        echo "<br>";
    } else if ($i > 0) {
        $acumulado *= $potencia2;
        echo " 2^ $i = " . $acumulado . "<br>";
    }
}

echo "<hr>";

$acumuladoEj2 = 1;
$potenciaEj2 = 2;

for ($i = 0; $i <= 10; $i++) {
    echo "2^ $i = " . $acumuladoEj2 . "<br>";
    $acumuladoEj2 *= $potenciaEj2;
}

echo "<hr>";
echo "**Ejercicio 9**<br>";
echo "Imprimir todos los números de tres dígitos que sean divisibles entre 7 <br>";

$numerosMin = 100;
$numerosMax = 999;

for ($i = $numerosMin; $i <= $numerosMax; $i++) {
    if ($i % 7 == 0)
        echo $i . " ";
}

echo "<hr>";
echo "**Ejercicio 10**<br>";
echo "# Calcular la suma de los cuadrados de los primeros 8 números naturales.<br>";

$cuadrado = 2;
$acumuladoCuadrado = 1;
$contador = 0;
$numero = 0;

for ($i = 1; $i <= 8; $i++) {
    echo $acumuladoCuadrado  = ($i) * ($numero + 1);
    $contador += $acumuladoCuadrado;
    echo " numero " . $numero++ . "<br>";
}
echo "Valor total " . $contador;

echo "<hr>";

echo "2º Solucion";
$contador2 = 0;

for ($i = 0; $i <= 8; $i++) {
    $contador2 += $i * $i;
    echo " " . $contador2;
}

echo "<hr>";
echo "**Ejercicio 11**<br>";
echo "# Imprimir una cuenta regresiva desde un número dado (por ejemplo, 20) hasta 1<br>";

$numeroDado = 20;
for ($i = 20; $i >= 1; $i--) {
    echo " | " . $i;
}

echo "<hr>";
echo " **Ejercicio 12**<br>";
echo "Mostrar los primeros 12 términos de la serie Fibonacci.<br>";

$a = 0;
$b = 1;

echo "$a $b ";

for ($i = 2; $i < 12; $i++) {
    $c = $a + $b;
    echo "$c ";
    $a = $b;
    $b = $c;
}

# La forma del profesor

echo "<br>";
echo "forma del profesor";
echo "<br>";

$fib1 = 0;
$fib2 = 1;

echo "F(1) = $fib1<br>";
echo "F(2) = $fib2<br>";

for ($i = 3; $i <= 12; $i++) {
    $fibNext = $fib1 + $fib2;
    echo "F($i) = $fibNext<br>";

    // Actualiza los valores para la siguiente iteración
    $fib1 = $fib2;
    $fib2 = $fibNext;
}


# Actualiza los valoress
$fib1 = $fib2;
$fib2 = $fibNext;


echo "<hr>";


echo "<hr>";
echo "**Ejercicio 13**<br>";
echo "Imprimir todos los números entre 500 y 600 que sean múltiplos de 9<br>";

$numeros500 = 500;
$numeros600 = 600;

for ($i = $numeros500; $i <= $numeros600; $i++) {
    if ($i % 9 == 0) {
        echo $i . " ";
    }
}

echo "<hr>";
echo "**Ejercicio 14**<br>";
echo "Calcular el producto de los primeros 6 números impares.<br>";

$impar = 0;
$total = 1;
$incremento = 1;
for ($i = 1; $i < 7; $i++) {
    $impar = $incremento;
    $incremento += 2;
    $total *= $impar;
}
echo "Resultado: " . $total;

echo "<hr>";
echo "**Ejercicio 15**<br>";
echo "Imprimir una secuencia numérica que siga el patrón: 1, 4, 7, 10, 13, ... hasta el término 15 <br>";

$valor = 1;
$incremento = 3;

for ($i = 1; $i <= 15; $i++) {
    echo $valor;
    if ($i < 15) {
        echo ", ";
    }
    $valor += $incremento;
}


for ($cont = 1 ; $i < $cont <= 15; $i += 3, $cont++) {
    echo "$i, ";
}
