<?php
// conversiones de tipos

// 2.2 String a numeros
echo "<hr>";
$cad = "123.56 desdfdf gwgwefwefwef";
$cadT = (float)$cad; // 123.56
echo "El valor de \$cadT y su tipo es " . gettype($cadT) . " y su valor es $cadT";
echo "<br />";
$cadT2 = (int)$cad; // 123
$cat2 = (int) $cad;
echo "El valor de \$cadT2 y su tipo es " . gettype($cadT2) . " y su valor es $cadT2";
echo "<br />";

$cad = "a wlñfhwelfhweofhweofhwe";
$cadT = (float)$cad; // 0
$cadT2 = (int)$cad; // 0
echo "El valor de \$cadT y su tipo es " . gettype($cadT) . " y su valor es $cadT";
echo "<br />";
echo "El valor de \$cadT2 y su tipo es " . gettype($cadT2) . " y su valor es $cadT2";
echo "<br />";