<?php
// recurso
$recurso1 = fopen("archivo.txt", "r");
// variable superglobal
$superglobal1 = $_SERVER['HTTP_HOST'];
// constante
define("CONSTANTE1", "valor constante");
// clases y funciones se nombran con mayusculas al inicio de cada palabra
// Ejemplo: MiClase, MiFuncion()
// funciones
function miFuncion($param1, $param2) {
    return $param1 + $param2;
}
// metodos de una clase
class MiClase {
    public function miMetodo($param1, $param2) {
        return $param1 + $param2;
    }
}
