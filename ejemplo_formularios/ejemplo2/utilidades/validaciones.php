<?php 

/**
 * Limpia una cadena de texto para evitar inyecciones XSS y otros ataques
 */
function limpiarCadena(string $cadena): string { 
    return htmlspecialchars(trim($cadena));
} 

/**
 * Verifica si la longitud de una cadena está dentro de un rango válido
 */
function esLongitudCadenaValida(string $cadena, int $min, int $max): bool {
    $longitud = strlen($cadena);
    return ($longitud >= $min && $longitud <= $max);
}

/**
 * Verifica si la longitud de una cadena está dentro de un rango válido
 */
function esLongitudCadenaValida2(string $cadena, int $min, int $max): bool{
// Si la longitud de la cadena es menor que el minimo o mayor que el maximo devuelve false
    if(strlen($cadena) < $min || strlen($cadena) > $max){
        # entonces la longitud de la cadena no es válida
        return false;
    }
    return true;
}

/**
 * Verifica si un email es válido
 */
function esEmailValido(string $email): bool {
    // filtra el email y devuelve true si es valido o false si no lo es
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

/**
 * 
 */
// function esEmailValido(string $email): bool {
//     if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
//         return false;
//     }
//     return true;
// }

/**
 * 
 */
// function esEmailValido(string $email): bool {
//     if(filter_var($email, FILTER_VALIDATE_EMAIL)){
//         return false;
//     }
//     return true;
// }

/**
 *  Verifica si las aficiones enviadas por el formulario son válidas 
 */
function sonAficionesValidas(array $aficionesMandadasPorFormulario) : bool{
    if(count($aficionesMandadasPorFormulario) == 0){
        // no se han enviado aficiones , devolvemos false
        return false;
    }   
    if(!count($aficionesMandadasPorFormulario))return false;
    global $aficionesTodas; // acceder al array global de aficiones definidas en datos.php
    // recorrer el array de aficiones mandadas por el formulario
    foreach($aficionesMandadasPorFormulario as $afi){
        // si la aficion no está en el array de aficiones todas
        if(!in_array($afi, $aficionesTodas)){
            // entonces la aficion no es valida
            return false;
        }
    }
    // todas las aficiones son validas
    return true;
}

function isAdministradorValido(string $valor ): bool {
    global $admin;
    if(in_array($valor, $admin)){
        return true;
    }
    return false;
}

/**
 * Verifica si la provincia es válida
 */
function esProvinciaValida(string $valor) : bool{
    global $provincias;
    if(in_array($valor, $provincias)){
        return true;
    }
    return false;
}
