<?php

//  1. Declara una variable $nombre con tu nombre y muéstrala usando echo.  
$nombre = "Raul Vela";
echo $nombre;
echo "<br />";

//  2. Declara dos variables: $a = 5 y $b = 3. Muestra la suma usando echo dentro de una frase con comillas dobles.  
$a = 5;
$b = 3;

echo "<br />";
$suma = $a + $b;
echo $suma;
echo "<br />";

// 3. Usa comillas simples para mostrar el texto: El valor de $a es 5 (debe mostrarse literal, sin interpretar $a). 

$texto = 'El valor de $a es 5';
echo "<br />";
echo $texto;
echo "<br />";

// 4. Usa comillas dobles para mostrar el texto: El valor de $a es 5 (debe mostrar el valor de la variable $a). 
 
$texto2 = "El valor de $a es 5";
echo $texto2;
echo "<br />";

// 5. Declara $texto = "Hola" y $numero = 10. Concatena ambos con el operador . y muéstralos con echo. 

$texto = "Hola";
$numero = 10;
echo "$texto " . " $numero";
echo "<br />";

// 6. Declara $valor = "123" (cadena). Conviértelo a entero usando casting y súmale 10. Muestra el resultado. 

$valor = "123";
$valor_casting =  (int)$valor;
echo $valor_casting;
echo "<br />";

// 7. Declara $valor = 45.7. Conviértelo a entero usando casting. Muestra el resultado. 

// 8. Declara $valor = true. Conviértelo a entero y muéstralo. ¿Qué valor esperas? 

// 9. Declara $valor = "hola". Conviértelo a entero y muéstralo. ¿Qué resultado da? 

// 10. Declara $edad = 25 y muestra con echo usando comillas dobles: Tengo 25 años. 

// 11. Declara $ciudad = "Madrid" y $pais = "España". Muestra con echo usando comillas dobles: Vivo en Madrid, España. 

// 12. Declara $numero = "007". Conviértelo a entero y luego a cadena otra vez. Muestra ambos pasos. 

// 13. Declara $dato = 0. Conviértelo a booleano y muéstralo con var_dump() (solo en este ejercicio se permite, para ver el tipo). 

// 14. Declara $frase = 'El precio es $precio pesos' (usa comillas simples). Luego define $precio = 500 y muestra la frase literal y luego la frase con el valor reemplazado (usando comillas dobles en un nuevo echo). 

// 15. Declara $x = "5" y $y = 10. Suma ambos sin convertir explícitamente. Muestra el resultado y explica por qué funciona.  
 