<?php

$nombre = "Manolo";
$pass = "secret0";

$nombreCompleto = "Juan Perez"; // camel case
$nombre_completo = "Juan Perez"; // underscore

// variables de tipo numerico
$numero1 = 2;
// variables de tipo cadena
$cadena1 = "Hola mundo";
// variable float
$float1 = 2.5;
$pvp = 19.99;
// variable booleana
$esValido = true; // false
$boolean1 = true; // false
// array
$array1 = array("valor1", "valor2", "valor3");
// objeto
$objeto1 = new stdClass();
$objeto1->propiedad1 = "valor1";
$objeto1->propiedad2 = "valor2";
// null
$dato = null;

// funciones
echo "La variable $pvp de valor $pvp es tipo " . gettype($pvp); // string, integer, double, boolean, array, object, NULL

echo "<br />";
echo "La variable \$pvp de valor $pvp es tipo " . gettype($pvp) . '<br />'; // string, integer, double, boolean, array, object, NULL
echo 'La variable $pvp de valor' . $pvp . ' es de tipo ' . gettype($pvp) . '<br />'; // string, integer, double, boolean, array, object, NULL

echo "<br />";
echo 'La variable $pvp de valor ' . $pvp . ' es de tipo ' . gettype($pvp); // string, integer, double, boolean, array, object, NULL

echo "<br />";
echo "Quiero sacar por pantalla una cadena 'comillas simples' y \"comillas dobles\" ";

echo "<br />";
echo 'Tu nombre es "Julian"';
// no lo cerrare pues esta pagina solo tendrá codigo PHP
// si se cierra el archivo con - se puede generar un error de cabecera 

// Ahora quiero tu nombre es "Julian" 
echo "Tu nombre es 'Julian' <br />";
echo "Tu nombre es \'Julian\' <br />";

echo 'Tu nombre es "Julian" <br />' . "\n";
echo "Tu nombre es \"Julian\" <br />" . "\n";
echo 'Tu nombre es \'Julian\' <br />' . "\n";

// La constante PHP_EOL
echo "Tu nombre es 'Julian' " . PHP_EOL; // constante de fin de linea segun el sistema operativo y sirve para la consola
// PHP_EOL; // constante de fin de linea segun el sistema operativo y sirve para la consola 
echo "tus apellidos Perez Gil<br />" . PHP_EOL; // constante de fin de linea segun el sistema operativo y sirve para la consola
echo "Adios";

echo "La variable $nombreCompleto es de tipo " . gettype($nombreCompleto) . '<br />'; // string, integer, double, boolean, array, object, NULL

echo "<br />";
var_dump($esValido);
echo "<br />";


$var1 = 34;
$var2 = 12.5;
$var3 = "Hola";
$var4 = "Variable superchula";
var_dump($var1, $var2, $var3);
var_dump($var2);
var_dump($var3);
var_dump($var4);
var_dump($var6);
echo "<br />";