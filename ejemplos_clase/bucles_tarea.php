<?php

echo date('Y-m-d');

echo "<br>";

# **Ejercicio 1**
# Imprimir los números del 1 al 10 usando un bucle for.

for ($i = 1; $i <= 10; $i++) {
    echo $i . " | ";
}

# **Ejercicio 2**
# Imprimir los números pares del 2 al 20 usando un bucle for.

echo "<br>";

for ($i = 1; $i <= 10; $i++) {
    echo " " . $i * 2;
}

# **Ejercicio 3**
# Calcular y mostrar la suma de los primeros 15 números naturales.

echo "<br>";
$acumulador =  0;

for ($i = 0; $i <= 15; $i++) {
    $acumulador += $i;
}
echo $acumulador;


# **Ejercicio 4**
# Imprimir la tabla de multiplicar del 5 (del 5×1 al 5×10).

echo "<br>";
$numero5 = 5;
for ($i = 1; $i <= 10; $i++) {
    echo $i . " * " . $numero5 . " = " . $i * $numero5;
    echo "<br>";
}

# **Ejercicio 5**
# Imprimir los números impares del 1 al 30 en orden descendente.

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

# **Ejercicio 6**
# Calcular el factorial de un número dado (por ejemplo, 7).

echo "<br>";

$factorial = 7;
$resultado = 7;

for ($i = 1; $i < 7; $i++) {
    $factorial -= 1;
    $resultado *= $factorial;
}
echo $resultado;
echo "<br>";

# **Ejercicio 7**
# Imprimir una secuencia de números que comience en 100 y disminuya de 5 en 5 hasta llegar a 50.


echo "<hr>";

$numeros100 = 100;
$disminuye100 = 100;

echo "<br>";
echo $num = ($numeros100 / 2);
echo "<br>";


for ($i = 0; $i < $numeros100; $i++) {
    // echo $i . " ";
    //    if ($i <= ($numeros100/2)) {
    //        echo $disminuye100 -= 5;
    //        echo "<br>";
    //    }
    if ($i <= $num) {
        $disminuye100 -= 5;
        echo $disminuye100 . " ";
    }
}
echo "<hr>";

# **Ejercicio 8**
# Mostrar las potencias de 2 desde 2^0 hasta 2^10.

# **Ejercicio 9**
# Imprimir todos los números de tres dígitos que sean divisibles entre 7.

# **Ejercicio 10**
# Calcular la suma de los cuadrados de los primeros 8 números naturales.

# **Ejercicio 11**
# Imprimir una cuenta regresiva desde un número dado (por ejemplo, 20) hasta 1.

# **Ejercicio 12**
# Mostrar los primeros 12 términos de la serie Fibonacci.

# **Ejercicio 13**
# Imprimir todos los números entre 500 y 600 que sean múltiplos de 9.

# **Ejercicio 14**
# Calcular el producto de los primeros 6 números impares.

# **Ejercicio 15**
# Imprimir una secuencia numérica que siga el patrón: 1, 4, 7, 10, 13, ... hasta el término 15.
