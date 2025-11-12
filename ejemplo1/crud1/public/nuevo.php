<?php

session_start();

include __DIR__ . "/../../utils/validaciones.php";
// 2025-11-12 - traigo la conexión
require __DIR__ . "/../bd/conexion.php";

# Obtengo los datos del formulario
if (isset($_POST['nombre'])) {
    # 1- Guardamos los valores ya saneados
    $nombre = sanearCadenas($_POST['nombre']);
    $descripcion = sanearCadenas($_POST['descripcion']);
    $precio = sanearCadenas($_POST['precio']);
    $precio = (float)$precio;
    $stock = sanearCadenas($_POST['stock']);
    $stock = (int) $stock;

    # 2- Hacemos las validaciones
    $errores = false; # supuestamente no tenemos errores
    # validación nombre y descripcion 
    if (!longitudCampovalida('nombre', $nombre, 4, 100)) {
        $errores = true;
    } else {
        // Esto evita que introduzca otro nombre igual
        if (existenNombre($conexion, $nombre)) $errores = true;
    }
    if (!longitudCampovalida('descripcion', $descripcion, 10, 500)) {
        $errores = true;
    }
    if (!valorNumericoValido('precio', $precio, 1, 9999.99)) {
        $errores = true;
    }
    if (!valorNumericoValido('stock', $stock, 0, 5000)) {
        $errores = true;
    }
    # 3- Si hay errores los muestro y si no guardo los datos
    if ($errores) {
        header("Location:nuevo.php");
        exit;
    }

    // 2025-11-12 - Vamos a parametrizar la insercción
    // si he llegado qui todo correcto , grabamos el producto
    $q = "insert into productos(nombre,descripcion,precio, stock) values(?, ? , ? , ?)";
    // Llave especial de conexión -> stmt = Estamento
    $stmt = mysqli_stmt_init($conexion);
    // Esta función prepara la consulta
    // Preparamos la consulta
    mysqli_stmt_prepare($stmt, $q);
    // decimos cada parametro ? a quién se corresponde y el tipo de dato → s string , d → decimal , i → integer b → boolean
    mysqli_stmt_bind_param($stmt, 'ssdi', $nombre, $descripcion, $precio, $stock);
    // Ejecutamos la consulta ya sin riesgos de inyeccion de sql
    mysqli_stmt_execute($stmt);
    // Cerramos la conexion
    mysqli_close($conexion);

    // esta linea se usa para enviar un mensaje a la pagina de productos
    $_SESSION['mensaje'] = "Producto Guardado";
    // redirigimos a la pagina de productos
    header("Location: productos.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">

<?php
# devuelve el directorio actual 
require __DIR__ . "/../bd/conexion.php";

$q = "select * from productos order by id desc"; # consulta
# Aquí creamos 
$productos = mysqli_query($conexion, $q);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP - 2025-10-22</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>


<body class="p-8">
    <form class="max-w-md mx-auto p-4 bg-white rounded shadow-md" method="post" action="nuevo.php">
        <!-- Campo Nombre -->
        <div class="mb-4">
            <label for="nombre" class="block text-gray-700 font-semibold mb-2">
                Nombre
            </label>
            <input type="text" id="nombre" name="nombre" required
                class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" />
            <?php pintarError('error_nombre') ?>
        </div>

        <!-- Textarea Descripción -->
        <div class="mb-4">
            <label for="descripcion" class="block text-gray-700 font-semibold mb-2">
                Descripción
            </label>
            <textarea id="descripcion" name="descripcion" rows="4" required
                class="w-full px-3 py-2 border border-gray-300 rounded resize-y focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
            <?php pintarError('error_descripcion') ?>
        </div>

        <!-- Campo Precio -->
        <div class="mb-4">
            <label for="precio" class="block text-gray-700 font-semibold mb-2">
                Precio
            </label>
            <input
                type="number"
                id="precio"
                name="precio"
                step="0.01"
                class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" />
            <?php pintarError('error_precio') ?>
        </div>

        <!-- Campo Stock -->
        <div class="mb-6">
            <label for="stock" class="block text-gray-700 font-semibold mb-2">
                Stock
            </label>
            <input
                type="number"
                id="stock"
                name="stock"
                class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" />
            <?php pintarError('error_stock') ?>
        </div>

        <!-- Botones -->
        <div class="flex justify-between">
            <button type="submit"
                class="flex items-center px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <i class="fas fa-paper-plane mr-2"></i> Enviar
            </button>
            <a href="productos.php"
                class="flex items-center px-4 py-2 border border-gray-400 rounded text-gray-700 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-400">
                <i class="fas fa-times mr-2"></i> Cancelar
            </a>
        </div>
    </form>

</body>

</html>