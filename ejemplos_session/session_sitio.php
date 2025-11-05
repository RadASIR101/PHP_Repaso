<?php

session_start();

if(!isset($_SESSION['user'])){
    header("Location:session_login.php");
    die();
}

echo "Estas logeado como : " . $_SESSION['user'] . "<br>";
echo "<a href='cerrar_session.php'>cerrar session</a>";
