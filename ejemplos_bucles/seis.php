<?php

echo "<hr>";
$edad = random_int(1, 100);

echo "La edad es $edad <br>";

// estructura if else
if ($edad >= 18) {
    echo "Es mayor de edad";
} else {
    echo "No es mayor de edad";
}

echo "<hr>";
// operador ternario 
echo "El usuario es mayor de edad : " . ($edad >= 45) ? true : false;
echo "<hr>";

if (($edad >= 45) ? true : false) {
    echo "Es mayor de edad ";
} else {
    echo "No es mayor de edad ";
}

echo "<hr>";
echo ($edad >= 45) ? "Eres mayor de edad " : "No eres mayor de edad";

$edad = 15;
$apruebaTodo = true;

if ($edad > 18 && $apruebaTodo) {
    $becario = true;
} else {
    $becario = false;
}

echo "<hr>";
$becario1 = ($edad >= 18 && $apruebaTodo);
var_dump($becario);
echo "<hr>";
var_dump($becario1);

echo "<hr>";

$cumpleAnios = false;
if ($cumpleAnios) {
    $regalo = "SI";
} else {
    $regalo = "NO";
}

echo "<hr>";
echo "El usuario tiene regalo : $regalo ";

echo "<hr>";
echo "El usuario tendra regalo " . $cumpleAnios ? $regalo = "si" : $regalo = "no";

$regalo = ($cumpleAnios) ? "SI" : "NO";
echo "$regalo tienes de cumpleaños";
echo "<hr>";

$logueado = "usuario";
$nombre = "pepe";
$usuario = ($logueado) ? $nombre : 'Invitado';
echo "<hr>";

$mensaje = (isset($mensaje)) ? $mensaje : 'Sin mensaje';
echo $mensaje;
echo "<hr>";

$nota = 85;
$calificacion = ($nota >= 90) ? 'Excelente' : (($nota >= 75) ? 'Bueno' : (($nota >= 60) ? 'Regular' : 'Insuficiente'));
echo $calificacion;

echo "<hr>";

// if else if else
$num1 = 34;
$num2 = 45;

// esto funcionaria per no es la forma correcta
if ($num1 < $num2) {
    echo "$num1 < $num2";
}

echo "<hr>";
if ($num1 == $num2) {
    echo "$num2 == $num1";
}

echo "<hr>";
if ($num1 > $num2) {
    echo "$num2 > $num1";
}

// esto sería la forma de hacerlo 
// if Anidado
echo "<hr> if Anidado\n";
if ($num1 < $num2) {
    echo "$num1 < $num2";
} else if ($num2 > $num1) {
    echo "$num1 < $num2";
} else {
    echo "$num1 = $num2";
}

// Programa  que me determine 
// si es una persona es un niño , edad o adulto
// niño (<13) , adolescente (>=13 < 18) 
// adulto (adulto >= 18 < 65)
// tercera edad >= 65

echo "<hr>";

$edad = random_int(1, 100);
echo $edad;
echo "<br>";

if ($edad < 13) {
    echo "La persona es un niño de " . $edad;
} else if ($edad >= 13 && $edad < 18) {
    echo "La persona es un adolescente de " . $edad;
} else if ($edad >= 18 && $edad < 65) {
    echo "La persona es un adulto de " . $edad;
} else if ($edad >= 65) {
    echo "La persona es un anciano de " . $edad;
}

echo "<hr>";

if ($edad < 13) {
    echo "La persona es un niño de " . $edad;
} else if ($edad < 18) {
    echo "La persona es un adolescente de " . $edad;
} else if ($edad < 65) {
    echo "La persona es un adulto de " . $edad;
} else {
    echo "La persona es un anciano de " . $edad;
}

echo "<hr>";

// DADA una nota de 0 a 100 ambos inclusive 
// el programa mostrara que el alumno es :
// Excelente nota >= 90
// aprobado de >= 70 < 90
// necesita mejorar >=50 <70
// suspenso < 50
$nota = 67;
echo $nota . "<br>";

if ($nota < 50) {
    echo "Usuario suspenso : " . $nota;
} else if ($nota >= 50 && $nota < 70) {
    echo "Necesita mejorar :" . $nota;
} else if ($nota >= 70 && $nota < 90) {
    echo "Aprobado con un  : " . $nota;
} else if ($nota >= 90) {
    echo "Excelente nota con un : " . $nota;
}

echo "<br>";
