<?php

$condicion = true;
do {
    echo " #### Menu de opciones ####\n";
    echo "1. Ir a Documentos\n";
    echo "2. Ir a Impresion\n";
    echo "3. Guardar\n";
    echo "0. Salir\n";
    // pedimos la opcion
// leer una entrada del usuario desde la terminal cuando ejecutas el script en modo CLI
    $op = readline("Dame una opcion (1,2,3,q):");
    echo "\n has escrito: $op";

    if (strtolower($op) == "q") {
        echo "\nHas elegido salir";
        break;
    }
## Si $op es un caracter lo convierte a 0
    $opcionBuena = (int) $op;
    if ($opcionBuena <= 0 || $opcionBuena > 3) {
        echo "\n Error , se esperaba un numero entre 1 y 3 o 'q' para salir\n";
        // continue; // ignora todo el resto del codigo y vuevle al do
    } else {
        // la opcion ha sido 1 , 2 , 3
        break;
    }
} while ($condicion);

switch ($opcionBuena) {
    case '1':
        echo "\nEntrando en documentos , la opcion es la 1";
        break;
    case '2':
        echo "\nEntrando en documentos , la opcion es la 1";
        break;
    case '3':
        echo "\nEntrando en documentos , la opcion es la 1";
        break;
    default:
        echo "\n Error al introducir una opcion";
        break;
}
