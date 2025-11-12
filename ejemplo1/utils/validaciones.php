<?php

/**
 * Esta funcion se usa para sanear cadenas de texto 
 */
function sanearCadenas(string $cadena): string
{
    return htmlspecialchars(trim($cadena));
}

/**
 * Esta funcion se usa para validar la longitud de un campo
 * 
 */
function longitudCampovalida(string $nomCampo, string $valorCampo, int $min, int $max): bool
{
    // si la longitud no es valida 
    if (strlen($valorCampo) < $min || strlen($valorCampo) > $max) {
        // esta linea se usa para guardar el error en sesion para mostrarlo luego
        $_SESSION["error_$nomCampo"] = "Error , este valor debe tener entre $min y $max caracteres";
        return false;
    }
    return true;
}

/**
 * Esta funcion se usa para campos numericos
 * 
 */
function valorNumericoValido($nomCampo, int | float $valorCampo, int | float $min, int | float $max)
{
    if ($valorCampo < $min || $valorCampo > $max) {
        // esta linea se usa para guardar el error en sesion para mostrarlo luego 
        $_SESSION["error_$nomCampo"] = "Error , este valor debe tener entre $min y $max valores";
        return false;
    }
    return true;
}

/**
 * Esta funcion pinta el error guardado en sesion
 */
function pintarError(string $nombreError)
{
    // si existe el error en sesion lo mostramos
    if (isset($_SESSION[$nombreError])) {
        echo "<p class='text-red-500 italic text-sm mt-1'>{$_SESSION[$nombreError]}</p>";
        // esta linea se usa para eliminar el error de sesion una vez mostrado
        unset($_SESSION[$nombreError]);
    }
}

/**
 * Esta funcion comprueba si existe un nombre en la tabla productos
 */
function existeNombreGPT($conexion, $nombre): bool
{
    $nombre = mysqli_real_escape_string($conexion, $nombre);
    $q = "select count(*) as total from productos where nombre='$nombre'";
    $resultado = mysqli_query($conexion, $q);
    $fila = mysqli_fetch_assoc($resultado);
    return $fila['total'] > 0;
}

/**
 * Esta funcion comprueba si existe un nombre en la tabla productos
 * 
 * Usa una llave preparada para evitar inyecciones sql
 * 
 */
function existenNombre($conexion, $nombre): bool
{
    $q = "SELECT id FROM productos WHERE nombre = ?";
    $stmt = mysqli_stmt_init($conexion);
    mysqli_stmt_prepare($stmt, $q);
    mysqli_stmt_bind_param($stmt, 's', $nombre);
    mysqli_stmt_execute($stmt);
    // Contar las filas → Para ver lo que esto me devuelve
    mysqli_stmt_store_result($stmt);
    $filasDevueltas = mysqli_stmt_num_rows($stmt);
    // cierra la llave tocha
    mysqli_stmt_close($stmt);
    if ($filasDevueltas == 1) {
        $_SESSION['error_nombre'] = "Error , el nombre '$nombre' Ya existe";
        return true;
    }
    return false;
}
