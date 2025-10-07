<?php

// Booleanos && - || - !

$num = 4;
if ($num % 2 == 0) {
    echo "la variable \%num=$num es par ";
} else {
    echo "la variable \%num=$num no es par ";
}

// Hacer un programa que me diga si $num es multiplo 7
echo "<hr>";

$multiplo_de_7 = true;
for ($i = 0; $i < 100; $i++) {
}

$num = random_int(0, 100);
if ($num % 7 == 0) {
    echo "El numero \$num=$num es multiplo de 7";
} else {
    echo "El numero \$num=$num es no multiplo de 7";
}

echo "<hr>";

// Hacer un programa que me diga que %num es multiplo de 13
if ($num % 13 != 0) {
    echo "El numero \$num=$num es No multiplo de 13";
} else {
    echo "El numero \$num=$num es multiplo de 13";
}

echo "<hr>";

$tareaHecha = false;
$horas = 18;
// Jaun podra salir de su casa Si tiene la tarea hecha y la hora es posterior a las 
// queremos un programa que me diga en funcion del valor $tareaHecha y $hora
// si Juan podra o no salir
if ($tareaHecha == true && $hora >= 18) {
    echo "Juan si puede salir";
} else {
    echo "Juan no puede salir";
}

echo "<hr>";

$tareaHecha = false;
$horas = 15;
// Jaun podra salir de su casa Si tiene la tarea hecha y la hora es posterior a las 
// queremos un programa que me diga en funcion del valor $tareaHecha y $hora
// si Juan podra o no salir
if ($tareaHecha == true && $hora >= 18) {
    echo "Juan si puede salir";
} else {
    echo "Juan no puede salir";
}

echo "<hr>";

$tareaHecha = false;
$horas = 15;
// Jaun podra salir de su casa Si tiene la tarea hecha y la hora es posterior a las 
// queremos un programa que me diga en funcion del valor $tareaHecha y $hora
// si Juan podra o no salir
if ($tareaHecha == true && $hora >= 18 && $hora <= 22) {
    echo "Juan si puede salir";
} else {
    echo "Juan no puede salir";
}

echo "<hr>";

// Pepe recibira una paga si tiene mas de 35 años trabajando o su edad es superior o igual a 70
$tiempoTrabajado = 42;
$edad = 50;
if ($tiempoTrabajado >= 35 || $edad >= 70) {
    echo "Pepe si cobrara su pension";
} else {
    echo "Pepe no cobrara su pension";
}

echo "<hr>";

// una persona recibira el carnet joven si lo ha solicitado y su edad esta entre 18 y 30 años , ambas incluidas o bien si la variable $enchufado=true
$enchufado = false;
$edad = 21;
$solicitado = false;

if (($enchufado == true && $solicitado == true) && ($edad >= 18)) {
    echo "La persona recibira el carnet joven";
} else {
    echo "La persona NO recibira el carnet joven";
}

echo "<hr>";

if (!($enchufado == true && $solicitado == true) && ($edad >= 18 && $edad <= 30)) {
    echo "La persona recibira el carnet joven";
} else {
    echo "La persona NO recibira el carnet joven";
}

echo "<hr>";

if ($solicitado == true && ($edad >= 18 && $edad <= 30) || $enchufado == true) {
    echo "La persona recibira el carnet joven";
} else {
    echo "La persona NO recibira el carnet joven";
}

echo "<hr>";

// Cuando la variable es bool no haria falta poner
// ==true o ==false , veasmoslo
// haremos un programa que me diga
// si el usuario es o no campeon en funcion
// de las variables $campeon

$campeon = true;
if ($campeon == true) {
    echo "el usuario si es campeon";
} else {
    echo "el usuario no  es campeon";
}


$campeon = true;
if ($campeon) {
    echo "el usuario si es campeon";
} else {
    echo "el usuario no  es campeon";
}

echo "<hr>";
// Cualquier valor mayor a 1 es true
$campeon = 5;
if ($campeon) {
    echo "el usuario si es campeon";
} else {
    echo "el usuario no  es campeon";
}

echo "<hr>";
// Cualquier valor menor de 0 es false
$campeon = 0;
if ($campeon) {
    echo "el usuario si es campeon";
} else {
    echo "el usuario no  es campeon";
}

echo "<hr>";
// Cualquier valor menor de 0 es false
$campeon = "";
if ($campeon) {
    echo "el usuario si es campeon";
} else {
    echo "el usuario no  es campeon";
}

echo "<hr>";
// Cualquier valor menor de 0 es false
$campeon = "fgerwfge";
if ($campeon) {
    echo "el usuario si es campeon";
} else {
    echo "el usuario no  es campeon";
}

echo "<hr>";
// Operadores ternario
$campeon2 = 10;
echo "Ejecución operador ternario : ";
echo $campeon2 == 10 ? true : false;

echo "<hr>";
//Envenenamiento numerico
$num = 124;
if ($num % 2) { // Se evalua como 0 y eso muentras false al ser 0
    echo "El numero :  $num NO es par ";
} else {
    echo "El numero :  $num SI es par ";
}

echo "<hr>";
// operador negacion not '!'
// convierte el 'true' en false y viceversa
$valor = true;
if (!$valor) {
    echo "El valor es Falso";
} else {
    echo "El valor es True";
}

echo "<hr>";
$valor = false;
if (!$valor) {
    echo "El valor es Falso";
} else {
    echo "El valor es True";
}