<?php

$frutas = [
    "pera",
    "manzana",
    "naranja",
    "sandia",
];

array_push($frutas, "melocoton"); // añade un elemento al final del array

print_r($frutas);

echo "<hr>";

$frutas[] = "kiwi";

print_r($frutas);

echo "<hr>";

array_pop($frutas); // elimina el ultimo elemento del array

print_r($frutas);

echo "<hr>";
var_dump($frutas);
array_unshift($frutas, 'fruta rara'); // añade un elemento al inicio del array
echo "<hr>";
array_shift($frutas); // elimina el primer elemento del array
print_r($frutas);

// array_shift y array_pop devuelven el elemento eliminado

echo "<hr>";

//3. sort , rsort ,  ksort , krsort , asort , arsort ,
$datos = [
    "almeria" => "juan",
    "zaragoza" => "federico",
    "valencia" => "xavier",
    "caceres" => "alberto",
    "granada" => "carmen"
];


echo "<hr>";

echo "__ARRAY ORIGINAL__";
echo "<pre>";
var_dump($datos);
echo "<hr>";
echo "</pre>";

echo "__ARRAY ORDENADO__";
echo "<pre>";
sort($datos); // ordena por valor y reindexa
var_dump($datos);
echo "<hr>";
print_r($datos);
echo "</pre>";


echo "<hr>";

// RSORT
$datos = [
    "almeria" => "juan",
    "zaragoza" => "federico",
    "valencia" => "xavier",
    "caceres" => "alberto",
    "granada" => "carmen"
];

echo "<hr>";

echo "__ARRAY ORIGINAL__";
echo "<pre>";
var_dump($datos);
echo "<hr>";
echo "</pre>";

echo "__ARRAY ORDENADO valor de forma descendente__";
echo "<pre>";
rsort($datos); // ordena por valor de forma descendente
var_dump($datos);
echo "<hr>";
print_r($datos);
echo "</pre>";

echo "<hr>";

// RSORT
$datos = [
    "almeria" => "juan",
    "zaragoza" => "federico",
    "valencia" => "xavier",
    "caceres" => "alberto",
    "granada" => "carmen"
];

echo "<hr>";

echo "__ARRAY ORIGINAL__";
echo "<pre>";
var_dump($datos);
echo "<hr>";
echo "</pre>";

echo "__ARRAY ORDENADO valor de forma ascendente las claves en orden ascendente__";
echo "<pre>";
ksort($datos); // ksort ordena por clave de forma ascendente
var_dump($datos);
echo "<hr>";
print_r($datos);
echo "</pre>";

echo "<hr>";


// RSORT
$datos = [
    "almeria" => "juan",
    "zaragoza" => "federico",
    "valencia" => "xavier",
    "caceres" => "alberto",
    "granada" => "carmen"
];

echo "<hr>";

echo "__ARRAY ORIGINAL__";
echo "<pre>";
var_dump($datos);
echo "<hr>";
echo "</pre>";

echo "__ARRAY ORDENADO valor de forma ascendente las claves en orden descendente__";
echo "<pre>";
krsort($datos); // krsort ordena por clave de forma descendente
var_dump($datos);
echo "<hr>";
print_r($datos);
echo "</pre>";

echo "<hr>";

// ASORT se ordena por valor manteniendo la relacion con la clave

// RSORT
$datos = [
    "almeria" => "juan",
    "zaragoza" => "federico",
    "valencia" => "xavier",
    "caceres" => "alberto",
    "granada" => "carmen"
];

echo "<hr>";

echo "__ARRAY ORIGINAL__";
echo "<pre>";
var_dump($datos);
echo "<hr>";
echo "</pre>";

echo "__ARRAY ORDENADO valor de forma ascendente las claves en orden descendente__";
echo "<pre>";
arsort($datos); // arsort ordena por valor de forma descendente manteniendo la relacion con la clave
var_dump($datos);
echo "<hr>";
print_r($datos);
echo "</pre>";

echo "<hr>";

// arsort ordena por valor de forma descendente manteniendo la relacion con la clave
var_dump($datos);
$datos = [
    "almeria" => "juan",
    "zaragoza" => "federico",
    "valencia" => "xavier",
    "caceres" => "alberto",
    "granada" => "carmen"
];

echo "<hr>";
echo "<pre>";
asort($datos); // asort ordena por valor de forma ascendente manteniendo la relacion con la clave
var_dump($datos);
echo "<hr>";
print_r($datos);
echo "</pre>";

echo "<hr>";
$nombres = ["Pepe", "Lucas", "Pedro"];
$nuevo = 'andres';
if (in_array($nuevo, $nombres)) {
    echo "El nombre $nuevo ya existe en el array";
} else {
    echo "El nombre $nuevo no existe en el array, se añade";
}
