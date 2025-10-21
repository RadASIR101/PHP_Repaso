<?php

# 21-10-2025
# Raúl Vela Salas
# ASIR 2º - IAW

// Ejercicios repaso funciones (->22/10/25)

# Funciones sin parámetros y sin retorno

// 1. Mensaje de bienvenida
// Crea una función saludo() que muestre en pantalla:
// “Bienvenido al curso de PHP”.

/**
 * Función Saludo
 */
function saludo() {
  echo "Bienvenido al curso de PHP";
}

saludo();

echo "<hr>";

// 2. Línea separadora

// Define una función separador() que imprima una línea horizontal usando HTML:
// echo "<hr>";

/**
 * 
 */
function separador() {
  echo "<hr>";
}

separador();

// 3. Mostrar fecha actual (explicando cómo hacerlo)
// En PHP se puede recuperar la fecha actual con la función date().
// Por ejemplo:
// $fecha = date("d/m/Y");
// echo $fecha; // Muestra algo como 16/10/2025
// Crea una función mostrarFecha() que muestre la fecha actual en formato dd/mm/yyyy.

/**
 * 
 */
function mostrarFecha() {
  $fecha = date("d/m/Y");
  echo $fecha;
}

mostrarFecha();

separador();

// 4. Encabezado HTML
// Crea una función encabezado() que imprima un encabezado con <h1> y un texto fijo, por ejemplo:
// “Ejercicios básicos de PHP”.

/**
 * 
 */
function encabezado() {
  echo "<h1> Ejercicios básicos de PHP </h1>";
}

encabezado();

separador();

// # Funciones con parámetros

// Saludo personalizado
// Crea una función saludar($nombre) que muestre el mensaje:
// “Hola, [nombre]. ¡Bienvenido!”

/**
 * 
 * @param type $nombre String
 */
function saludar($nombre) {
  echo "Hola, $nombre. ¡Bienvenido!";
}

$nombre = "Raul Vela";
saludar($nombre);

separador();

// Calcular el cuadrado de un número
// Crea una función cuadrado($num) que calcule y muestre el cuadrado del número recibido.

$num = random_int(1, 10);

echo "numero elegido : " . $num;
echo "<br>";

/**
 * 
 * @param type $num int 
 */
function cuadrado($num) {
    echo "el cuadrado es : " . $num * $num;
}

cuadrado($num);

separador();

// Área de un rectángulo
// Define una función areaRectangulo($base, $altura) que calcule el área (base * altura) y la muestre.

$base = random_int(1, 100);
$altura = random_int(1, 100);

/**
 * 
 * @param type $base
 * @param type $altura
 */
function areaRectangular($base, $altura) {
  echo " • Base: $base * Altura: $altura";
  echo "<br>";
  echo " • Resultado " . $base * $altura;
}

areaRectangular($base, $altura);

separador();

// Número par o impar
// Crea una función esPar($numero) que muestre si el número recibido es par o impar.
// Usa el operador módulo:
// if ($numero % 2 == 0) { echo "Par"; } else { echo "Impar"; }

$numero = random_int(1,100);

function esPar($numero){
if($numero % 2 == 0){
    echo "numero $numero es Par"; 
}else{
    echo "numero $numero NO es Par"; 
}
}

esPar($numero);

separador();

// 9. Texto en mayúsculas
// Crea una función aMayusculas($texto) que muestre el texto en mayúsculas.
// En PHP se usa la función strtoupper($texto).

$array = [];

for ($i = 0 ; $i < 10 ; $i++){
    $palabra = chr(ord('a') + mt_rand(0, 25));
    $array[$i] = $palabra . " ";
    echo $array[$i];   
}

foreach ($array as $char) {
    $string .= $char;
}

separador();

/**
 * 
 */
function aMayusculas($texto){
    echo strtoupper($texto);
}

aMayusculas($string);

separador();

// Conversión de euros a dólares
// Crea una función convertirEuros($cantidad) que calcule el equivalente en dólares, usando por ejemplo:
// $dolares = $cantidad * 1.08;

$cantidad = random_int(1,100);
printf("• Cantidad generada : ". $cantidad . "<br>");


/**
* 
*/
function convertirEuros($cantidad){
    echo "• Dinero Total : ". $dolares = $cantidad * 1.08;
}

convertirEuros($cantidad);

separador();


# Funciones con retorno de valores

// Suma de dos números
// Define una función suma($a, $b) que devuelva la suma y luego muéstrala con echo.

echo "Valor 1 : " . ($a = random_int(1,100));
echo "<br>";
echo "Valor 2 : " . ($b = random_int(1,100));
echo "<br>";

/**
 * 
*/
function suma($a , $b ){
    return "Suma: " . $a + $b;
}

echo suma($a , $b);

separador();


// Promedio de tres números
// Crea una función promedio($n1, $n2, $n3) que calcule y devuelva la media aritmética.

echo "Valor 1 : " . ($a = random_int(1,100));
echo "<br>";

echo "Valor 2 : " . ($b = random_int(1,100));
echo "<br>";

echo "Valor 3 : " . ($c = random_int(1,100));
echo "<br>";

/**
 * 
 */
function promedio($n1, $n2, $n3){
    echo "Resultado final : ". ($n1 + $n2 + $n3) / 3 ;  
}

promedio($a,$b,$c);

separador();

// Número mayor
// Crea una función mayor($a, $b) que devuelva el número mayor entre los dos.

echo "Valor 1 : " . ($a = random_int(1,100));
echo "<br>";

echo "Valor 2 : " . ($b = random_int(1,100));
echo "<br>";

/**
 * 
 */
function mayor($a, $b){
    separador();
    echo $a > $b ? "$a es mayor que $b" : "$b es mayor que $a";
}

mayor($a,$b);

separador();

// Calcular precio con IVA
// Crea una función precioConIVA($precio) que devuelva el precio con un 21% de IVA aplicado.
// Fórmula:
// return $precio * 1.21;


echo "Precio sin IVA: " . $precio = random_int(1,100);

/**
 * 
*/
function precioConIVA($precio){
    echo "<br>";
    return "Precio sin IVA: " . $precio * 1.21;
}

echo precioConIVA($precio);

separador();

// Longitud de una cadena
// Crea una función longitudCadena($texto) que devuelva la cantidad de caracteres.
// En PHP se usa strlen($texto).

$longitud = random_int(5,20);
echo "Longitud : " . $longitud;
echo "<br>";

$frase = [];

for ($i = 1 ; $i <= $longitud; $i++){
    $palabra = chr(ord('A') + random_int(0, 25));
    $frase[$i] = $palabra;
    echo $frase[$i];   
}

/**
 * 
 */
function longitudCadena($texto){
    $cadena = implode('', $texto);
   
    $contador = 0;
    for($i = 1 ; $i <= count($texto); $i++){
        $contador = $i;
    }
    
    echo "Longitud total 1 : ". $contador;
    echo "<br> "  ;
    $valor = strlen($cadena);
    echo "Longitud total 2 : ". $valor; 
}

separador();

longitudCadena($frase);


# Funciones con estructuras de control

// Calificación según nota
// Crea una función calificacion($nota) que devuelva:

// “Insuficiente” si la nota < 5

// “Suficiente” si está entre 5 y 6

// “Notable” si está entre 7 y 8

// “Sobresaliente” si es ≥ 9

$nota = random_int(1, 10);

function calificacion($nota){
    echo "<br> Nota sacada en el examen : " . $nota . " <br>";

    $mensaje = match (true) {
        $nota < 5 => "Insuficiente",
        $nota == 5 => "Suficiente",
        $nota > 5 && $nota <= 6 => "Suficiente",
        $nota > 6 && $nota <= 7 => "Notable",
        $nota > 7 && $nota <= 8 => "Notable Alto",
        $nota > 8 => "Sobresaliente",
    };

    echo $mensaje;
}

calificacion($nota);


separador();


// Tabla de multiplicar
// Crea una función tabla($numero) que muestre la tabla de multiplicar del número (del 1 al 10) usando un bucle for.

function tabla($numero){
    for($i = 1 ; $i <= 10 ; $i++){
        echo $numero * $i . " ";
    }
}

tabla(5);

separador();

// Contar números pares en un array
// Crea una función contarPares($numeros) que recorra un array y devuelva cuántos elementos son pares.
// Usa foreach y el operador %.

$array = [];

function getDatos($array){
    for($i = 0 ; $i < 20 ; $i++){
        $array[$i] = random_int(1,100);
        echo " Numero <span style='color: red'> : " . $array[$i] . "</span> <br>";
    }
    return $array;
}

$array_pares = getDatos($array);


separador();

$total_valor = 0;

function contarPares($array){
    global $total_valor;
    $contador = 0;
    for($i = 0 ; $i < count($array) ; $i++){
        if($array[$i] % 2 == 0){
            echo "<span style='color: green'> " . $array[$i] . "</span> ";
            $total_valor++;
            $contador++;
        }
    }
    return $contador;
}

$numeros_pares1 = contarPares($array_pares);

echo "<br>Total Numeros Pares: ". $numeros_pares1;
separador();

echo "Total Numeros Pares con Variable Global: ". $total_valor;
separador();

// Calcular total de un array de precios
// Crea una función totalCompra($precios) que sume todos los valores de un array y devuelva el total.


function getPrecio(){
    $precios = [];
    foreach(range(1, 20) as $key){
    $precio = random_int(1, 100);
    $precios[$key] = $precio;
    echo "Precio del producto $key : $precio<br>";
    }
    return $precios;
}


function totalCompra($array){
    $total = 0;
    foreach($array as $valor){
        $total += $valor;
    }    
    echo "Total de la compra : $total"; 
}

totalCompra(getPrecio());


separador();


// Generar lista HTML desde un array
// Crea una función mostrarLista($elementos) que reciba un array de palabras y genere una lista HTML (<ul>...</ul>) mostrando cada elemento.

/**
 * 
 */
function getPalabra(){
    for($i = 0 ; $i < 6 ; $i++){
        $palabra[$i] = chr(ord('A') + random_int(0, 25));
        if($i % 2 == 0){
            $numero = random_int(1,5);
            $letra = match ($numero) {
                1 => "A" ,
                2 => "E" ,
                3 => "I" ,
                4 => "O" ,
                5 => "U" ,
            };
            $palabra[$i] = $letra;
        }
    }
    return $palabra;
}

/**
 * 
 */
function getArrayPalabras(){
    $array_palabras = [];
    for($i = 0 ; $i < 1 ; $i++){
        $palabra = implode('',getPalabra());
        $array_palabras[$i] = $palabra;
    }
    return $array_palabras;
}

/**
 * 
 */
function mostrarLista(){
    echo "Lista de elementos";
    $elementos = [];
    echo "<ul>";
    for($i = 1 ; $i < 11; $i++){
        $elementos[$i] = implode('',getArrayPalabras());
        $color = ($i % 2 == 0) ? 'red' : 'green';
        echo "<li style='color:$color;'> " . $i . ":" . $elementos[$i] . "</li>";
    }
    echo "</ul>";
}

mostrarLista();