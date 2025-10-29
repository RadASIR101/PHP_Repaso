<!DOCTYPE html>
<html lang="es">

<?php
include 'datos.php'; # incluir las provincias desde otro fichero
// Metodo antiguo de definir las provincias
// $provincias = ["Almería", "Cádiz", "Córdoba", "Granada", "Huelva", "Jaén", "Málaga", "Sevilla"];
// sort($provincias);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP - 2025-10-22</title>
    <!-- Carga los estilos de Tailwind y FontAwesome -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>

<!-- eje horizontal px , eje vertical py para el padding -->

<body class='p-8 bg-blue-200'>

    <div class="p-4 rounded-xl shadow-xl w-1/2 mx-auto bg-gray-200">
        <form method="POST" action="action1.php">
            <!-- Nombre -->
            <div class="relative mb-3">
                <input type="text" name="nombre" placeholder="Nombre"
                    class="pl-10 pr-4 py-2 w-full border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <i class="fas fa-user text-gray-400"></i>
                </div>
            </div>

            <!-- password -->
            <div class="relative mb-3">
                <input type="text" name="password" placeholder="Password"
                    class="pl-10 pr-4 py-2 w-full border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <i class="fas fa-user text-gray-400"></i>
                </div>
            </div>


            <!-- Email -->
            <div class="relative mb-3">
                <input type="email" name="email" placeholder="Email"
                    class="pl-10 pr-4 py-2 w-full border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <i class="fas fa-envelope text-gray-400"></i>
                </div>
            </div>

            <!-- Descripción -->
            <div class="relative mb-3">
                <textarea name="descripcion" rows="4" placeholder="Descripción"
                    class="pl-10 pr-4 py-2 w-full border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                <div class="absolute top-2 left-3 pointer-events-none">
                    <i class="fas fa-align-left text-gray-400"></i>
                </div>
            </div>

            <!-- Campo Provincia -->
            <div class="relative mb-3">
                <select id="provincia" name="provincia"
                    class="pl-10 pr-4 py-2 w-full border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">Selecciona provincia</option>
                    <?php
                    foreach ($provincias as $item) {
                        echo "<option>$item</option>";
                    }
                    ?>
                </select>
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <i class="fas fa-map-marker-alt text-gray-400"></i>
                </div>
            </div>

            <div class="mt-2 flex flex-row-reverse">?
                <button type="submit"
                    class="px-4 py-2 rounded-xl bg-gray-400 hover:bg-green-600 text-white font-bold mr-2">Guardar
                    <i class="fa-solid fa-floppy-disk"></i>
                </button>
            </div>

            <div class="mt-2 flex flex-row-reverse">
                <button type="reset"
                    class="px-4 py-2 rounded-xl bg-gray-400 hover:bg-red-600 text-white font-bold mr-2">Limpiar
                    <i class="fa-solid fa-trash-can-arrow-up"></i>
                </button>
            </div>
        </form>
    </div>

</body>


</html>