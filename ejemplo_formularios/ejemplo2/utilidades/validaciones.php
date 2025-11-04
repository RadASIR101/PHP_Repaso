<?php 

/**
 * Limpia una cadena de texto para evitar inyecciones XSS y otros ataques
 */
function limpiarCadena(string $cadena): string { 
    return htmlspecialchars(trim($cadena));
} 