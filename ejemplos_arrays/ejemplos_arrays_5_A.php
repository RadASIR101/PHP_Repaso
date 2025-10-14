<?php

echo "<hr>";
$nombres = ["Pepe", "Lucas", "Pedro"];
$nuevo = 'andres';
if (in_array($nuevo, $nombres)) {
    echo "El nombre $nuevo ya existe en el array";
} else {
    echo "El nombre $nuevo no existe en el array, se añade";
}

echo "<hr>";
echo in_array($nuevo, $nombres) ? print("El nombre $nuevo ya existe en el array") : print("El nombre $nuevo no existe en el array, se añade");

echo "<hr>";

$andalucia = [
    "Granada",
    "Cadiz",
    "Sevilla",
    "Almeria",
    "Huelva",
    "Jaen",
    "Malaga",
    "Cordoba"
];

$galicia = ["La Coruña", "Lugo", "Orense", "Pontevedra"];

$extremadura = ["Caceres", "Badajoz"];

$madrid = ["Madrid"];

$comunidades = ['Madrid' => $madrid, 'Extremadura' => $extremadura, 'Andalucia' => $andalucia, 'Galicia' => $galicia];

ksort($comunidades);

echo "<ol>";

foreach ($comunidades as $comunidad => $provincias) {
    echo "<li>$comunidad</li>";
    sort($provincias);
    echo "<ul>";
    foreach ($provincias as $nomPro) {
        echo "<li>$nomPro</li>";
    }
    echo "</ul>";
}
echo "</ol>";
