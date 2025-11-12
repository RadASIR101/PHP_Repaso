<?php
# DATOS PARA LA BASE DE DATOS
// archivos para establecer una conexion a una bbdd
// en este caso host=127.0.0.1
// user=crud
// base de datos = crud1 
// pass=asd1 - 

# Crear la conexión
try {
    $conexion = mysqli_connect("127.0.0.1", "user0", "asd1", "crud1");
} catch (Exception $ex) {
    die("Error al conectar a la base de datos , el mensaje es : " . $ex->getMessage());
}
