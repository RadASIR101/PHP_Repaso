<?php

session_start(); 
# Guardia de seguridad 
# si tengo la variable de sesión creada puedo acceder al contenido
if(!isset($_SESSION['user'])){
    header("Location:login2.php");
    die();
}
 
// Si estoy aqui me he logeado correctamente
$email =  $_SESSION['user'];
$perfil = $_SESSION['perfil'];
$color = ($perfil==1) ? 'bg-red-500' : 'bg-green-400';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP - 2025-10-21</title>
    <!-- CDN icono tailwind -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- CDN icono fontawesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/brands.min.css"
        crossorigin="anonymous"></script>
</head>

<!-- En esta linea creamos el cuerpo de la pagina -->
<body class="p-8 <?= $color ?>"> <!-- -->
    <h1 class='text-xl text-center'>Usuario : <?=$email ?> - Perfil : <?=$perfil ?></h1>
    <?php 
    if($perfil==1){
        echo <<< TXT
        <p class='p-2 bg-gray-200 mt-4 rounded-lg text-center'>Contenido exclusivo para administradores</p>
        TXT;
    } else {
        echo <<< TXT
        <p class='p-2 bg-gray-200 mt-4 rounded-lg text-center'>Contenido exclusivo para usuarios normales</p>
        TXT;
    }
    ?>
    <div class="mt-8 text-center">
        <a href="salir2.php" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition-colors">Salir</a>
    </div>
</body>

</html>