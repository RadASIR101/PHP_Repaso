<?php 

/**
 * 
 */
function recursiva() : void{
    echo "Recursividad";
}

function separador(){
        echo "<hr color='red'> ";
}

// n = x (n - 1);

separador();

/**
 * 
 */
function factorial($valor){
    if($valor == 0 ) return 1;
    return $valor *= factorial($valor - 1);
}

echo factorial(5);
separador();


/**
 * 
 */
function calculafactorial(int $num) : int{
    if($num == 0 ) return 1;
    return $num * calculafactorial($num-1);
}

echo calculafactorial(5);

separador();

/**
 * 
 */
function fibonacci(int $num) : int {
    if($num == 1) return 0;
    if($num == 2) return 1;
    return (fibonacci($num-1) + fibonacci($num-2));
}

echo fibonacci(5);

 
/**
 * 
 */
function fibonacci(int $num, array &$memo = []) : int {
    if ($num == 1) return 0;
    if ($num == 2) return 1;
    if (isset($memo[$num])) return $memo[$num];

    $memo[$num] = fibonacci($num - 1, $memo) + fibonacci($num - 2, $memo);
    return $memo[$num];
}

echo fibonacci(50); // Mucho más rápido que la versión recursiva pura

/**
 * 
 */
function fibonacci(int $num) : int {
    if ($num == 1) return 0;
    if ($num == 2) return 1;

    $a = 0;
    $b = 1;
    for ($i = 3; $i <= $num; $i++) {
        $c = $a + $b;
        $a = $b;
        $b = $c;
    }
    return $b;
}

echo fibonacci(50);

?>