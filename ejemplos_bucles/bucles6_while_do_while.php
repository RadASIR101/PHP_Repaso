<?php

echo date("d-m-Y");

echo "<hr>";

$i = 0;
do {
    echo "$i" . " ";
    $i++;
} while ($i < 100);

echo "<hr>";

$i = 7;
do {
    echo "$i" . " ";
    $i += 7;
} while ($i < 100);

echo "<hr>";

$multiplo = 0;
$veces = 7;
do {
    echo "$multiplo" . " ";
    $multiplo += 7;
    $veces++;
} while ($veces < 50);

echo "<hr>";

$num = 100;
do {
    echo " " . $num;
    $num--;
} while (1 <= $num);

echo "<hr>";