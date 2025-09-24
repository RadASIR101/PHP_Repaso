<?php


$numero1 = 45;
var_dump($numero1);
$numero1 = "Manolo";
echo "<br />";
var_dump($numero1);


$numero1 = 300.5;
$conversion_string = (string)$numero1;
var_dump($conversion_string);
echo "<br />";
$conversion_int = (int)$numero1;
var_dump($conversion_int);
echo "<br />";

// conversiones con funciones
$valor = 300;
$valor_string = strval($valor);
var_dump($valor_string);
echo "<br />";
$valor_float = floatval($valor);
var_dump($valor_float);
echo "<br />";
$valor_int = intval($valor);
var_dump($valor_int);
echo "<br />";
$valor_bool = boolval($valor);
var_dump($valor_bool);
echo "<br />";
$cadena = "123abc";
$cadena_int = intval($cadena);
var_dump($cadena_int); // 123
echo "<br />";

$precio = 34.56789;
$precio = (string) $precio;
echo "<br />";
var_dump($precio); // "34.56789"
echo "<br />";

$precio_limpio = (int) $precio; // 34 
echo "<br />";
var_dump($precio_limpio); // 34 

echo "<hr>";
$a = 3;
$b = 0;
$c = 23.56;
$d = 0.0;
$e = "Manolo";
$f = "";
$aB = (bool)$a; // true 
var_dump($aB);
echo "<br />";
$b = (bool)$b; // false
var_dump($b);

$cB = (bool)$c; // true
echo "<br />";
var_dump($cB);

$dD = (bool)$d; // false
echo "<br />";
var_dump($dD);

// cadena no vacia es true
$eB = (bool)$e; // true
echo "<br />";
var_dump($eB);
// cadena vacia es false
$fB = (bool)$f; // false
echo "<br />";
var_dump($fB);

// 2.2 String a numeros
echo "<hr>";
$cad = "123.56";
$cadT = (float)$cad; // 123.56
echo "El valor de \$cadT y su tipo es " . gettype($cadT) . " y su valor es $cadT";
echo "<br />";
$cadT2 = (int)$cad; // 123
$cat2 = (int) $cad;
echo "El valor de \$cadT2 y su tipo es " . gettype($cadT2) . " y su valor es $cadT2";
echo "<br />";
