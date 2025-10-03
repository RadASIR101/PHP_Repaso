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

echo "<hr>";

# Cambiamos ahora los colores por c

echo "<table border='1' align='center'>";
for ($f = 0; $f < $filas; $f++) {
    echo "<tr>";
    for ($c = 0; $c < $columnas; $c++) {
        $color = ($c % 2 == 0) ? "pink" : "blue";
        echo "<td style='background-color:$color'>&nbsp;&nbsp;&nbsp;&nbsp;</td>";
    }
    echo "</tr>";
}
echo "</table>";


echo "<table border='1' align='left'>";
for ($f = 0; $f < 8; $f++) {
    echo "<tr>";
    for ($c = 0; $c < 8; $c++) {
        if ($c % 2 == 0) {
            echo "<td style='background-color:white'>&nbsp;&nbsp;&nbsp;&nbsp;</td>";
        } else {
            echo "<td style='background-color:black'>&nbsp;&nbsp;&nbsp;&nbsp;</td>";
        }
    }
    echo "</tr>";
}
echo "</table>";

echo "<hr>";

echo "<table border='1' align='left'>";
for ($f = 0; $f < 8; $f++) {
    echo "<tr>";
    for ($c = 0; $c < 8; $c++) {
        $color = (($f + $c) % 2 == 0) ? "white" : "black";
        echo "<td style='background-color:$color'>&nbsp;&nbsp;&nbsp;&nbsp;</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "<hr>";

echo "<table border='1' align='left'>";
for ($f = 0; $f < 8; $f++) {
    echo "<tr>";
    for ($c = 0; $c < 8; $c++) {
        $color = (($f + $c) % 2 == 0) ? "white" : "black";
        echo "<td> $f + $c</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "<hr>";

echo "<table border='1' align='left'>";
for ($f = 0; $f < 8; $f++) {
    echo "<tr>";
    for ($c = 0; $c < 8; $c++) {
        $color = (($f + $c) % 2 == 0) ? "white" : "black";
        echo "<td> $f + $c</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "<hr>";
echo "<br>";

$tabla = 8;

echo "<table border='1' align='left'>";
for ($f = 1; $f < 10; $f++) {
    echo "<tr>";
    for ($c = 1; $c < 10; $c++) {
        echo "<td>" . ($f * $tabla) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "<hr>";

$numero = 7;
echo "\n <table align='center' border='2'>";
echo "\n <tr align='center'><td colspan'5'>Tabla de Multiplicar del $numero</td></tr>";
for ($i = 1; $i <= 10; $i++) {
    echo "<tr align='center'</tr>";
    echo "<td>$numero</td>";
    echo "<td>X</td>";
    echo "<td>$i</td>";
    echo "<td>=</td>";
    echo "<td>" . $i * $numero . "</td>";
    echo "</tr>";
}
echo "</table>";

echo "<hr>";