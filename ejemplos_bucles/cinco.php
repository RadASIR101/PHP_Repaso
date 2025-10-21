<?php

// El usuario tendra acceso si 
// su nombre de usuario es 'admin' o su correo es 'admin@email.es'
$user = "usuario";
$email = "admin@email.es";

if ($user == "admin" || $email == "admin@email.es") {
    echo "Acceso permitido";
} else {
    echo "Acceso no permitido";
}

echo "<hr>";

// El usuario tendra bono descuento
// si es mayor de 25
// y tiene una invitación 
$edad = 34;
$invitacion = true;

if ($edad >= 34 && $invitacion == true) {
    echo "El usuario tendra bono descuento";
} else {
    echo "El usuario no tendra bono descuento";
}

echo "<hr>";
echo "<br>";

if ($edad > 25 && $invitacion) {
    echo "El usuario tendra bono descuento";
} else {
    echo "El usuario no tendra bono descuento";
}

echo "<hr>";
// El usuario aprobara si la nota es mayor o igual que 5
// y la asistencia mayor o igual al 80%
$nota = random_int(0, 10);
$asistencia = 80;

if ($nota >= 5 && ($asistencia >= 80)) {
    echo "El usuario aprobara la nota";
} else {
    echo "El usuario no aprobara la nota";
}

if ($nota >= 5 && ($asistencia >= 80)) {
    echo "El usuario aprobara la nota";
} else {
    echo "El usuario no aprobara la nota";
}

echo "<hr>";

// una persona puede solicitar una beca si tiene menos de 25 años
// y es estudiante o siendo estudiante es desempleado

$estudiante = false;
$desempleado =  true;
$edad = 25;

if (($edad >= 25  && $estudiante == true) || ($desempleado == true)) {
    echo "una persona puede solicitar una beca";
} else {
    echo "una persona no puede solicitar una beca";
}

if (($estudiante && $edad < 25) || ($estudiante && $desempleado)) {
    echo "una persona puede solicitar una beca";
} else {
    echo "una persona no puede solicitar una beca";
}

if ($estudiante && ($edad < 25 || $desempleado)) {
    echo "una persona puede solicitar una beca";
} else {
    echo "una persona no puede solicitar una beca";
}

echo "<hr>";

// una persona puede contratar n seguro medico si
// tiene entre 18 y 60 años y su salud es buena
// tiene menos de 18 pero depende de un asegurado
// en cualquier caso tener que hacerlo solicitado

$edad = 30;
$edad = 90;
$edad = 10;
$solicitud = true;
$salud = "buena";
$dependeAsegurado = true;

if ($solicitud && (($edad >= 18 && $edad <= 60) && ($salud == "buena") || ($edad < 18 && $dependeAsegurado == true))) {
     echo "Si solicitado";
} else {
    echo "Error , No puede solicitarlo";
}

echo "<hr>";
