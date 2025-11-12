<!DOCTYPE html>
<html lang="es">

<?php

session_start();

# devuelve el directorio actual
require __DIR__ . "/../bd/conexion.php";

$q = "select * from productos order by id desc"; # consulta
# Aquí creamos 
$productos = mysqli_query($conexion, $q);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD </title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="p-8">
    <div class="relative overflow-x-auto">
        <div class="flex flex-row-reverse">
            <a href="nuevo.php" class="p-2 text-white font-bold bg-green-500 hover:bg-green-700 round-xl">
                <i class="fas fa-plus mr-1"></i> Nuevo
            </a>
        </div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nombre
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Descripción
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Precio
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Stock
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Acciones
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productos as $item): ?>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?= $item['nombre'] ?>
                        </th>
                        <td class="px-6 py-4">
                            <?= $item['descripcion'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?= $item['precio'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?= $item['stock'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <!-- Necesita parametrizar este formulario para evitar inyecciones SQL -->
                            <form method="POST" action="delete.php">
                                <input type="hidden" name="id" value="<?php $item['id'] ?>" />
                                <button type="submit">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>

        </table>
    </div>

    <?php

    // solo se crea una vez para no repetir el mensaje 
    // para evitar que se repita el mensaje
    if (isset($_SESSION['mensaje'])) {
        // Mostramos la alerta con sweet alert de JS
        echo <<<TXT
        <script>
        Swal.fire({
            icon: "success",
            title: "{$_SESSION['mensaje']}",
            showConfirmButton: false,
            timer: 1500
            });
        </script>
        TXT;
        unset($_SESSION['mensaje']);
    }

    ?>


</body>


</html>