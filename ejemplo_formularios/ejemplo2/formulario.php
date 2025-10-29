<?php 

require 'utilidades/datos.php'; # incluir las provincias desde otro fichero

### Ejemplo de manejo de formularios en PHP
// if(isset($_POST['nombre'])){
    // if(isset($_POST['administrador'])){
// if(isset($_POST['email'])){
    // $nombre = htmlspecialchars(trim($_POST['nombre']));
    // echo "Procesando";
    //     echo "<pre>";
    //     var_dump($_POST);
    //     echo "</pre>";
    //     die(); # detener la ejecución del script aquí
    // // }
    // } else {
        //     $nombre = "";
        // }
### FIN Ejemplo de manejo de formularios en PHP
        
 if(isset($_POST['nombre'])){
    // Si estoy aqui es porque se ha enviado el formulario y procesamos los datos
    // 1- Recoger y filtrar los datos del formulario
    echo "<pre>";
 }

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
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario PHP - 2025-10-21</title>
        <!-- CDN icono tailwind -->
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <!-- CDN icono fontawesome -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/brands.min.css"
            crossorigin="anonymous"></script>
    </head>

    <!-- eje horizontal px , eje vertical py para el padding -->

<body class="p-8 bg-blue-200">

</body>

<div class="max-w-xl mx-auto p-6 bg-white shadow rounded-lg space-y-6">
<form action="#" method="post" >
  <!-- Nombre -->
  <div class="mb-4">
    <label for="nombre" class="block text-sm font-medium text-gray-700 mb-1">
      <i class="fa-solid fa-user mr-2 text-gray-500" aria-hidden="true"></i>
      Nombre
    </label>
    <input
      type="text"
      id="nombre"
      name="nombre"
      required
      class="w-full rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-400 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
      placeholder="Tu nombre"
    />
  </div>

  <!-- Email -->
  <div class="mb-4">
    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">
      <i class="fa-solid fa-envelope mr-2 text-gray-500" aria-hidden="true"></i>
      Email
    </label>
    <input
      type="email"
      id="email"
      name="email"
      required
      class="w-full rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-400 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
      placeholder="tucorreo@ejemplo.com"
    />
  </div>

  <!-- Aficiones (4 checkboxes) -->
   <div class="mb-4">
  <fieldset class="space-y-3">
    <legend class="text-sm font-medium text-gray-700">
      <i class="fa-solid fa-heart mr-2 text-gray-500" aria-hidden="true"></i>
      Aficiones
    </legend>

    <div class="flex items-center">
        <?php 
        foreach($aficiones as $afi){
            echo <<< TXT
            <label class="inline-flex items-center">
            <input type="checkbox" name="aficiones[]" value="$afi" class="mr-2"> $afi
            </label><br>
            TXT;
        }
        ?>
    </div>



    <!-- <div class="flex items-center">
      <input id="aficion-cine" name="aficiones[]" type="checkbox" value="cine"
             class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500" />
      <label for="aficion-cine" class="ml-2 text-sm text-gray-700">Cine</label>
    </div>

    <div class="flex items-center">
      <input id="aficion-juegos" name="aficiones[]" type="checkbox" value="juegos"
             class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500" />
      <label for="aficion-juegos" class="ml-2 text-sm text-gray-700">Juegos</label>
    </div>

    <div class="flex items-center">
      <input id="aficion-php" name="aficiones[]" type="checkbox" value="php"
             class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500" />
      <label for="aficion-php" class="ml-2 text-sm text-gray-700">PHP</label>
    </div> -->
  </fieldset>
  </div>

  <!-- Administrador (radio SI/NO) -->
<div class="mb-4">
  <fieldset class="space-y-3">
    <legend class="text-sm font-medium text-gray-700">
      <i class="fa-solid fa-user-shield mr-2 text-gray-500" aria-hidden="true"></i>
      Administrador
    </legend>
        <?php 
            foreach($admin as $adm){
                echo <<<TXT
                <label class="inline-flex items-center">
                <input type="radio" name="administrador" value="$adm"  class="mr-2"> $adm
                </label>
                TXT;
            }
        ?>  


    <!-- <div class="flex items-center">
      <input id="admin-si" name="administrador" type="radio" value="SI"
             class="h-4 w-4 border-gray-300 text-blue-600 focus:ring-blue-500" />
      <label for="admin-si" class="ml-2 text-sm text-gray-700">SI</label>
    </div> -->

    <!-- <div class="flex items-center">
      <input id="admin-no" name="administrador" type="radio" value="NO" checked
             class="h-4 w-4 border-gray-300 text-blue-600 focus:ring-blue-500" />
      <label for="admin-no" class="ml-2 text-sm text-gray-700">NO</label>
    </div> -->
  </fieldset>
  </div>

  <!-- Provincia (un solo option) -->
  <div class="mb-4">
    <label for="provincia" class="block text-sm font-medium text-gray-700 mb-1">
      <i class="fa-solid fa-location-dot mr-2 text-gray-500" aria-hidden="true"></i>
      Provincia
    </label>
    <select
      id="provincia"
      name="provincia"
      class="w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-gray-900 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
    >
      <option value="AL">Elije una provincia</option>
      <?php 
        foreach($provincias as $prov){
            echo "<option>$prov</option>";
        }
      ?>
    </select>
  </div>

  <div class="mb-4">
  <!-- Botones -->
  <div class="flex items-center gap-3 pt-2">
    <button type="submit"
            class="inline-flex items-center rounded-md bg-blue-600 px-4 py-2 text-white shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
      <i class="fa-solid fa-paper-plane mr-2" aria-hidden="true"></i>
      Enviar
    </button>
    <button type="reset"
            class="inline-flex items-center rounded-md bg-gray-100 px-4 py-2 text-gray-700 shadow hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500">
      <i class="fa-solid fa-rotate-left mr-2" aria-hidden="true"></i>
      Reset
    </button>
  </div>
  </div>

</form>
</body>

</html>