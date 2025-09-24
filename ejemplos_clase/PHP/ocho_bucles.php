<?php
echo "<h1>Bucles en PHP</h1>";
echo "<hr>";
$fecha = date("d/m/Y H:i:s");
echo "<div style='color: green;'>$fecha</div>";

echo "<h2>for() , while() , do while() , foreach()</h2>";

// primero pone el 0 y luego pone el 1 después de ejecutar el bloque de codigo 
// incremento post-incremento

echo "<h3>for()</h3>";
echo "<div>
Primero pone el 0 y luego pone el 1 después de ejecutar <br> 
El bloque de codigo incremento post-incremento
<hr>
</div>";

for ($i = 0; $i <= 20; $i++) {
    echo "El valor de i es : $i <br>";
    break; // para salir del bucle
}

echo "<hr>";
// primero pone el 0 y luego pone el 1 antes de ejecutar el bloque de codigo
// incremento pre-incremento
for ($i = 0; $i <= 20; ++$i) {
    echo "El valor de i es : $i <br>";
    break; // para salir del bucle
}

echo "<hr>";
// primero pone el 0 y luego pone el 5 antes de ejecutar el bloque de codigo
for ($i = 0; $i <= 20; $i += 5) {
    echo "El valor de i es : 
    $i <br>";
    break; // para salir del bucle
}

echo "<hr>";
for ($i = 0; $i <= 30; $i += 3) {
    echo "El valor de i es : $i <br>";
    break; // para salir del bucle
}

echo "<hr>";
for ($i = 15; $i <= 1300; $i++) {
    if ($i % 13 == 0) { // if(!($i%13)) {
        echo "El valor de i es : $i <br>";
        break; // para salir del bucle
    }
}

echo "<hr>";
for ($i = 15; $i <= 1300; $i++) {
    if (!($i % 13)) {
        echo "El valor de i es : $i <br>";
        break; // para salir del bucle
    }
}

echo "<hr>";
// incremento de 13 en 13 empezando en 26
for ($i = 26; $i <= 1300; $i += 13) {
    echo "El valor de i es : $i <br>";
    break; // para salir del bucle
}

echo "<hr>";
echo "<div>
primero pone el 20 y luego i vale 20 y luego ejecuta -- para desincrementar el valor y lo pone el 19 después de ejecutar el bloque de codigo
decremento post-decremento
</div>";

for ($i = 20; $i >= 0; $i--) {
    echo "El valor de i es : $i <br>";
    break; // para salir del bucle
}

$contador = 0;
for ($i = 0; $i <= 100; $i++) {
    $contador += $i;
    //    echo "El valor de i es : $contador <br>";
    //    break; // para salir del bucle
}

echo $contador;

echo "<hr>";

$contador = 0;
// 1º Cuenta 0 
//           2º Comrpueba Valor
//                    4º Incremento 
for ($i = 0; $i <= 5; $i++) {
    // 3º Ejecuta 
    $contador += $i;
    echo "El valor de i es : $contador <br>";
}

echo $contador;

// producto de los 10 primeros numeros 
$producto = 1;
for ($i = 1; $i <= 10; $i++) {
    echo $producto *= $i;
    echo "<br>";
}
echo "<hr>";
echo $producto;

// Dado el numero guardado en la variable $num
// quiero saber la cantidad de divisores que tiene 
// y que me los muestre
// por ejemplo si num=12 → 1,2,3,4,6,12 un total de 6 de divisores

echo "<br>";

$numero12 = 22;
$contador1 = 0;
$contador2 = 0;
for ($i = 1; $i <= $numero12; $i++) {
    if ($numero12 % $i == 0) {
        echo $numero12 . " - " . $i;
        $contador1 += 1;
        $contador2++;
    }
}

echo " <br> contador " . $contador1;
echo " <br> contador " . $contador2;

echo "<br>";

$numero22 = 22;
$contador1 = 0;
$contador2 = 0;
for ($i = 1; $i <= $numero22; $i++) {
    if ($numero22 % $i == 0) {
        echo $numero22 . " - " . $i;
        $contador1 += 1;
        $contador2++;
    }
}

echo " <br> contador " . $contador1;
echo " <br> contador " . $contador2;

echo "<br>";
