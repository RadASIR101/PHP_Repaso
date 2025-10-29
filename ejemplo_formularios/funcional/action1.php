<?php

// require , include , require_once , include_once
// require "manolo.php"; # sirve para incluir ficheros externos pero si el fichero no existe para la ejecución
// include "manolo.php"; # sirve para incluir ficheros externos pero si el fichero no existe no para la ejecución
// require_once sirve para no cargar varias veces el mismo fichero pero si el fichero no existe para la ejecución
// include_once sirve para no cargar varias veces el mismo fichero pero si el fichero no existe no para la ejecución

// $provincias = ["Almería", "Cádiz", "Córdoba", "Granada", "Huelva", "Jaén", "Málaga", "Sevilla"];

 /**
  * 
  */
 function limpiarCadena(string $cadena): string
 {
     return htmlspecialchars(trim($cadena));
 }

 /**
  * 
  */
function esLongitudCampoValido(string $valor, int $min, int $max): bool
{

    if (strlen($valor) < $min || strlen($valor) > $max) {
        return false;
    }
    return true;
}

/**
 * 
 */
function isEmailValido(string $email): bool
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    }
    return false;
}

/**
 * 
 */
function isProvinciaValida(string $prov): bool
{
    global $provincias;
    if (in_array($prov, $provincias)) {
        return true;
    }
    return false;
}


//1 - Recoger los datos y filtro del formulario usando POST

$nombre =  htmlspecialchars(trim($_POST['nombre']));
$email = htmlspecialchars(trim($_POST['email']));
$descripcion = htmlspecialchars(trim($_POST['descripcion']));
$provincia = htmlspecialchars(trim($_POST['provincia']));