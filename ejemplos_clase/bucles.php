<?php

echo date('D, d M Y H:i:s');

echo "<br>";
## REPASO DE FOR

for ($i = 1; $i <= 10; $i++) {
    echo "Valores " . $i . " <br> ";
}

echo "<hr>";
for ($i = 0; $i <= 20; $i += 7) {
    echo "$i";
}

# Multiples 7 entre 10 y 100 
echo "<hr>";

$contador = 0;
for ($i = 10; $i <= 100; $i++) {
    if ($i % 7 == 0) {
        $contador++;
        echo "Numero multiplo de 7 : $i";
        echo "<br>";
    }
}
echo "Numero total : $contador";

# Todos los divisores del numero 1000

echo "<hr>";

$num1000 = 100;
$contador2 = 0;
for ($i = 1; $i <= $num1000; $i++) {
    if (1000 % $i == 0) {
        $contador2++;
        echo "Numero multiplo de 1000 : $i";
        echo "<br>";
    }
}

echo "Numero total : $contador2";

echo "<hr>";

# Numeros primos

# Divisible entre 1 y el mismo



// echo $numero / 1;

echo "<hr>";

$numero = 100;
$cont = 0;
for ($i = 1; $i <= $numero; $i++) {
    if ($numero % $i == 0) {
        $cont++;
    }
}

if ($cont <= 2) {
    echo "<br> el numero $numero es Primo";
} else {
    echo "<br> el numero $numero No es Primo";
}


$numero = 40;
$esPrimo = true;
for ($i = 2; $i < $numero; $i++) {
    if ($numero % $i == 0) {
        $esPrimo = false;
        break;
    }
}

echo ($esPrimo) ?  "<br> es Primo" : "<br> NO es Primo";

echo "<hr>";

// Dado un numero $max quiero mostrar todos los primos entre 1 desde ese numero y ademas contarlo
// ej - 11 : 1,2,3,5,6,7,11

$max = 1000;
$contadorPrimos = 0;

for ($i = 1; $i <= $max; $i++) {
    $esPrimo = true;
    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
            $esPrimo = false;
            break;
        }
    }
    if ($esPrimo) {
        echo "$i -> ";
        $contadorPrimos++;
    }
}

echo "<br> Hay un total $contadorPrimos primos entre 1 y $max";


for ($candidato = 1; $candidato <= $max; $candidato++) {
    $esPrimo = true;
    for ($j = 2; $j < $candidato; $j++) {
        if ($candidato % $j == 0) {
            $esPrimo = false;
            break;
        }
    }
    if ($esPrimo) {
        echo "$candidato -> ";
        $contadorPrimos++;
    }
}

echo "<br> Hay un total $contadorPrimos primos entre 1 y $max";

# chat gpt

$numero = 7;
$esPrimo = true;

if ($numero <= 1) {
    $esPrimo = false;
} else {
    for ($i = 2; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $esPrimo = false;
            break;
        }
    }
}

if ($esPrimo) {
    echo "• El número $numero es primo.";
} else {
    echo "• El número $numero NO es primo.";
}

# 

for ($numero = 1; $numero <= 30; $numero++) {
    $esPrimo = true;

    if ($numero <= 1) {
        $esPrimo = false;
    } else {
        for ($i = 2; $i < $numero; $i++) {
            if ($numero % $i == 0) {
                $esPrimo = false;
                break;
            }
        }
    }

    if ($esPrimo) {
        echo "• $numero es primo<br>";
    }
}
