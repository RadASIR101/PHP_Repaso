<?php

$num = 40;

echo "<hr>";

$i = 0;
while ($i < 40) {
    echo $i++;
}

echo "<hr>";

$num = 40;
$contador = 0;

while (0 < $num) {
    echo "$contador " . " | " ;
    $contador+=2;
    $num--;
}


// usar while para mostrar los impares de 1 a 100

echo "<br>";

$contador = 1;
$numero = 0;
while ($numero < 100) {
    echo $contador += 2;
    echo " | " . " ";
    $numero++;
}

echo "<hr>";

$numero = 1;
while ($numero < 100) {
    echo $numero += 2;
    echo " | " . " ";
}


echo "<hr>";
$num = 1;
while (true) {
    echo "$num ,";
    $num += 2;
    if ($num > 10) break;
}

# Mostrar decreciente de 1 a 100

echo "<hr>";
$i = 100;
while ($i > 0) {
    echo $i . " | ";
    $i -= 1;
}

echo "<hr>";
$i = 100;
while ($i > 0) {
    echo $i . " | ";
    $i--;
}

echo "<hr>";
$i = 100;
while ($i > 0) {
    --$i;
    echo $i . " | ";
}
