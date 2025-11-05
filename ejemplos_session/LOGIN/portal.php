<?php

session_start(); 
# Guardia de seguridad 
# si tengo la variable de sesión creada puedo acceder al contenido
if(!isset($_SESSION['user'])){
    header("Location:login.php");
    die();
}

echo "<div style='color: blue; font-size: 1.5rem; font-weight: bold; text-transform: uppercase; margin: 2rem 0; text-shadow: 2px 2px 4px rgba(0,0,0,0.1);'>
<b>Bienvenido Usuario </b>" . $_SESSION['user'] . 
"</div>";
echo "<div style='margin: 2rem 0;'><br><a href='salir.php'>Cerrar Sesion</a></div>";
