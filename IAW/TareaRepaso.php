<?php

// Repositorio : https://github.com/RadASIR101/PHP_Repaso.git

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
echo $texto;
echo "<br />";

// 4. Usa comillas dobles para mostrar el texto: El valor de $a es 5 (debe mostrar el valor de la variable $a). 
 
$texto = "El valor de $a es 5";
echo $texto;
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
$valor = 45.7;
$valor_entero = (int)$valor;
echo $valor_entero;
echo "<br />";

// 8. Declara $valor = true. Conviértelo a entero y muéstralo. ¿Qué valor esperas? 
$valor = true;
$valor_entero = (int) $valor;
echo $valor_entero . " es el valor esperado";
echo "<br />";

// 9. Declara $valor = "hola". Conviértelo a entero y muéstralo. ¿Qué resultado da? 

$valor = "hola";
$valor_entero = (int)$valor;
echo $valor_entero;
echo "<br />";

// 10. Declara $edad = 25 y muestra con echo usando comillas dobles: Tengo 25 años. 
$edad = 25;
echo "$edad con comillas dobles ";  
echo "<br />";

echo "<hr>";

// 11. Declara $ciudad = "Madrid" y $pais = "España". Muestra con echo usando comillas dobles: Vivo en Madrid, España. 
$ciudad = "Madrid";
$pais = "España";
echo "Vivo en $ciudad , $pain";
echo "<br />";

// 12. Declara 'numero = "007" . Conviértelo a entero y luego a cadena otra vez. Muestra ambos pasos.";
$numero = "007";
var_dump($numero);
echo "<br />";
$entero = (int)$numero;
var_dump($entero);
echo "<br />";
$cadena = (string)$entero;
var_dump($cadena);
echo "<br />";

// 13. Declara $dato = 0. Conviértelo a booleano y muéstralo con var_dump() (solo en este ejercicio se permite, para ver el tipo). 
echo "<hr>";
$dato = 0;
$booleano = (bool)$dato;
var_dump($booleano);
echo "<br />";
echo "Tipo de valor :" . gettype($booleano); 
echo $booleano;
//   gettype($booleano);
// var_dump($booleano)
echo "<hr>";

// 14. Declara $frase = 'El precio es $precio pesos' (usa comillas simples). Luego define $precio = 500 y muestra la frase literal y luego la frase con el valor reemplazado (usando comillas dobles en un nuevo echo). 

 
$frase = 'El precio es $precio pesos';
$precio = 500;
echo $frase;
echo "<br />";
echo "$frase $precio";
echo "<br />";
$frase2 = "El precio es $precio pesos";

echo "<hr>";
// 15. Declara $x = "5" y $y = 10. Suma ambos sin convertir explícitamente. Muestra el resultado y explica por qué funciona.  
$x = "5";
$y = 10;
$suma = $x + $y;
echo $suma;

// PHP es un lenguaje de tipado débil, lo que significa que realiza conversión implícita de tipos cuando es necesario. 
// 
// En este caso:

// $x es una cadena ("5"), pero contiene un valor numérico válido.

// Al usar el operador +, PHP intenta convertir ambos operandos a números.

// Convierte "5" a 5 automáticamente.

// Luego suma 5 + 10, dando como resultado 15