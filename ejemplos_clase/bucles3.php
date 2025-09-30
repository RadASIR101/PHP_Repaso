<?php

echo date('D, d M Y H:i:s');

// pintar una tabla html con $filas=4 x $columnas=5;
$filas = 4;
$columnas = 5;

echo "<table border='1' , alig='center'>";

for ($f = 0; $f < $filas; $f++) {
    echo "<tr>";
    for ($c = 0; $c < $columnas; $c++) {
        echo "<th> Valor </th> ";
    }
    echo "</tr>";
}
echo "</table>";


echo "<hr>";

$color = "red";
echo "<table border='1' , alig='center'>";

for ($f = 0; $f < $filas; $f++) {
    for ($c = 0; $c < $columnas; $c++) {
        echo "<td> Valor </td> ";
        if ($c % 1 == 0) {
            echo "<td style='background-color':$color</td> ";
        } else {
            echo "<td> Si </td> ";
        }
    }
    echo "</tr>";
}
echo "</table>";

echo "<hr>";

$color = "red";
$filas = 5;      // Define el número de filas
$columnas = 4;   // Define el número de columnas

echo "<table border='1' align='left'>";

for ($f = 0; $f < $filas; $f++) {
    echo "<tr>"; // Abrir fila

    for ($c = 0; $c < $columnas; $c++) {
        if ($c % 2 == 0) {
            echo "<td style='background-color:$color'>Valor</td>";
        } else {
            echo "<td>Si</td>";
        }
    }

    echo "</tr>"; // Cerrar fila
}

echo "</table>";
