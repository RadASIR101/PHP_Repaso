<?php

$provincias = ["Almería", "Cádiz", "Córdoba", "Granada", "Huelva", "Jaén", "Málaga", "Sevilla"];

/**
 * 
 */
function limpiarCadena(string $cadena): string
{
    return htmlspecialchars(trim($cadena));
}

function esLongitudCampoValido(string $valor, int $min, int $max): bool
{

    if (strlen($valor) < $min || strlen($valor) > $max) {
        return false;
    }
    return true;
}

function isEmailValido(string $email): bool
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    }
    return false;
}

function isProvinciaValida(string $prov): bool
{
    global $provincias;
    if (in_array($prov, $provincias)) {
        return true;
    }
    return false;
}


//1 - Recoger los datos y filtro del formulario usando POST

// $nombre =  htmlspecialchars(trim($_POST['nombre']));
// $email = htmlspecialchars(trim($_POST['email']));
// $descripcion = htmlspecialchars(trim($_POST['descripcion']));
// $provincia = htmlspecialchars(trim($_POST['provincia']));

//1 - Recoger los datos y filtro del formulario usando POST
$nombre =  limpiarCadena($_POST['nombre']);
$password = limpiarCadena($_POST['password']);
$email = limpiarCadena($_POST['email']);
$descripcion = limpiarCadena($_POST['descripcion']);
$provincia = limpiarCadena($_POST['provincia']);

$errores = [];

if (!esLongitudCampoValido($nombre, 5, 20)) {
    $errores[] = "*** Error el campo nombre debe tener entre 5 y 20 caracteres";
}

if (!esLongitudCampoValido($descripcion, 5, 250)) {
    $errores[] = "*** Error el campo descripcion debe tener entre 5 y 250 caracteres";
}

if (!esLongitudCampoValido($password, 6, 20)) {
    $errores[] = "*** Error el campo password debe tener entre 6 y 20 caracteres";
}

if (!isEmailValido($email)) {
    $errores[] = "*** Error el campo email debe tener entre 6 y 20 caracteres";
}

if (!isProvinciaValida($provincia)) {
    $errores[] = "*** Error la provincia NO es valida";
}

if (count($errores)) {
    // sabemos que ha han habido al menos un error , lo mostramos
    echo "Han habido un total de <b>" . count($errores) . "</b> errores <br>";
    echo "<ol>";
    foreach ($errores as $error) {
        echo "<li>$error</li>";
    }
    echo "</ol>";
} else {

    //2. Hacemos las validaciones perinentes 
    // campo nombre entre 5 y 50 caracteres
    // descripcion entre 15 y 250 
    // provincias que sea una de las arrays
    // email que sea un email valido
    // password entre 6 y 20 caracteres

    //3 - una vez limpados y validados decido que hacer con ellos 
    echo "<h1>Datos recibidos:</h1>";
    echo "<p><strong>Nombre:</strong> " . ($nombre) . "</p>";
    echo "<p><strong>Password:</strong> " . ($password) . "</p>";
    echo "<p><strong>Email:</strong> " . ($email) . "</p>";
    echo "<p><strong>Descripción:</strong> " . ($descripcion) . "</p>";
    echo "<p><strong>Email:</strong> " . ($provincia) . "</p>";
}
