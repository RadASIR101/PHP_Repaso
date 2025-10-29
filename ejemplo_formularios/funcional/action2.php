<?php

// rerquire e include , require_once , include_once

require 'validaciones1.php'; # incluir las funciones de validación definidas en el otro fichero 



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

/**
 * Manejo de errores el 0 lo consideramos que no hay errores
 */
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
