<?php

echo "<h1>Eso de : Switch</h1>";

function verDia()
{
    // añadir la fecha actual
    echo date("d/m/Y");
    // como obtener dia de la semana
    echo "<br>";
    echo "Día hoy : " .  date("N"); // 1-7 (lunes a domingo)
    echo "<br>";
    $dia = date("N");
    echo "<hr>";

    switch ($dia) {
        case 1:
            echo "Lunes";
            break;
        case 2:
            echo "Martes";
            break;
        case 3:
            echo "Miercoles";
            break;
        case 4:
            echo "Jueves";
            break;
        case 5:
            echo "Viernes";
            break;
        case 6:
            echo "Sabado";
            break;
        case 7:
            echo "Domingo";
            break;
        default:
            echo "El dia no es valido";
            break;
    }
}

echo "<hr>";

function mostrarFechayDia()
{
    echo date("d/m/Y");
    echo "<br>";
    echo "Día hoy : " .  date("N"); // 1-7 (lunes a domingo)
    echo "<br>";
    $dia = date("N");
    echo "<hr>";
    return $dia;
}

function acceso($userName)
{

    $userName = "admin";
    switch ($userName) {
        case "admin":
            echo "Permiso Garantizado";
            break;
        case "user":
            echo "Permiso Restringido";
            break;
        case "guest":
            echo "No tiene permiso";
            break;
        default:
            echo "Usuario no reconocido";
    }
}

echo "<hr>";

verDia();
echo "<hr>";
mostrarFechayDia();
echo "<hr>";
acceso("admin");
echo "<hr>";

function getDiaLaborable($dia)
{
    switch ($dia) {
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
            return '<span style="color: green;">Es un día laboral</span>';
        case 6:
        case 7:
            return '<span style="color: red;">Es fin de semana</span>';
        default:
            return '<span style="color: gray;">El día no es válido</span>';
    }
}

echo getDiaLaborable(1);
echo "<br>";
getDiaLaborable(4);
echo "<hr>";

echo "<h1>Eso de : Match</h1>";
echo "Match es una nueva estructura de control que se introdujo en PHP 8.0.0";
echo "<br>";
echo "Similar a switch, pero con algunas diferencias clave: como que comprueba la igualdad estricta (===) y no requiere declaraciones break para evitar la caída a través de los casos.\nAdemás, match devuelve un valor, \n lo que permite asignar el resultado directamente a una variable.";
echo "<hr>";
$dia = random_int(1, 7);
echo "El dia es $dia <br>";
echo $mensaje = match ($dia) {
    1 => "Lunes",
    2 => "Martes",
    3 => "Miercoles",
    4 => "Jueves",
    5 => "Viernes",
    6 => "Sabado",
    7 => "Domingo",
    default => "El dia no es valido"
};

echo "nos permite agrupar valores";

echo "<hr>";
echo match ($dia) {
    1, 2, 3, 4, 5 => print("Es un día laboral"),
    6, 7 => print("Es fin de semana"),
    default => print("El día no es válido"),
};
echo "<hr>";

// mas eficiente y claro
echo match ($dia) {
    1, 2, 3, 4, 5 => ("Es un día laboral"),
    6, 7 => ("Es fin de semana"),
    default => ("El día no es válido"),
};
echo "<hr>";


// <span style="color: gray;">El día no es válido</span>