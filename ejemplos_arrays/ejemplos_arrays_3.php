<?php

# 2025-10-08

$usuario = [
    "nombre" => "Juan",
    "apellidos" => "Perez",
    "perfil" => "Admin",
    "sueldo" => 18000,
    "activo" => false
];


var_dump($usuario);

echo "<hr>";

foreach ($usuario as $clave => $valor) {
    echo "usuario[$clave]=$valor<br>";
}

echo "<hr>";

echo $usuario["nombre"];

echo "<hr>";

echo $usuario["sueldo"];

echo "<hr>";

$usuario = [
    "nombre" => "Juan",
    "apellidos" => "Perez",
    "perfil" => "Admin",
    "sueldo" => 18000,
    "activo" => "",
];

echo "<hr>";

$usuario["ciudad"] = "Almeria";

foreach ($usuario as $clave => $valor) {
    echo "usuario[$clave]=$valor<br>";
}

echo "<hr>";
var_dump($usuario);

$usuario["active"] = true;


echo "<hr>";
var_dump($usuario);

echo "<hr>";
foreach ($usuario as $clave => $valor) {
    echo "usuario[$clave]=$valor<br>";
}

