<?php

// 2025-10-15 - Profesor

$usuario = ['Pepe', 'Juan', 'Andres', 'Ana'];

/**
 * Esta función comprueba si un usuario existe en el array $usuario
 * mediante una variable global.
 * 
 * Uso de in_array para buscar en el array.
 * 
 * Recibe un parametro $nombre y devuelve true si existe, false si no.
 * 
 * @param string $nombre 
 * @return bool
 */
function existeUsuario(string $nombre): bool
{
    global $usuario;
    return in_array($nombre, $usuario);
}

var_dump(existeUsuario("Pepe"));

echo "<hr>";


$usuario2 = ['Pepe', 'Juan', 'Andres', 'Ana'];


function existeUsuario2(string $nombre, array $usuarios2): bool
{
    return in_array($nombre, $usuarios2);
}

var_dump(existeUsuario2("Manolo", $usuario2));

echo "<hr>";

// hacer una funcion pintarTabla(string $contenidoCelda, int $filas , int $columnas)


function pintarTabla(string $contenidoCelda, int $filas, int $columnas)
{
    echo "<table bordercolor='black'> ";
    echo "<thead>";
    for ($i = 0; $i < $filas; $i++) {
        "<tr> </tr>";
        for ($columnas = $filas; $columnas < $filas; $columnas++) {
            "<th> $contenidoCelda </th>";
        }
        echo "</thead>";
    }
    echo "</table>";
}

pintarTabla("Tabla 1", 5, 10);

/**
 * 
 */
function setPintarTablaProfesor(string $contenidoCelda, int $filas, int $columnas): void
{
    if ($filas <= 0 || $columnas <= 0) {
        echo "<br> Error , se esperaba valores mayores que cero para filas y/o columnas";
        return;
    }

    echo "<table align='center' border='2' cellpadding='2'>\n";
    for ($f = 0; $f < $filas; $f++) {
        echo "<tr align='center'>";
        for ($c = 0; $c < $columnas; $c++) {
            echo "<td>$contenidoCelda</td>";
        }
    }
    echo "</tr>";
}
echo "</table>";

setPintarTablaProfesor("Tabla 1", 5, 10);


//----------------

function saludo($nombre = "Anonimo")
{
    echo "<br>Hola:<b> $nombre";
}

// Valor por defecto
saludo();

saludo("Juan");

saludo("Ines Maria");
