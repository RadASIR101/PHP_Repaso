<?php


$andalucia = [
    "Almeria",
    "Granada",
    "Cordoba",
    "Granada",
    "Huelva",
    "Sevilla",
    "Jaen",
    "Malaga",
];

$galicia = ["La Coruña", "Lugo", "Orense", "Pontevedra"];

$extremadura = ["Caceres", "Badajoz"];

$madrid = ["Madrid"];

$comunidades = [
    'Andalucia' => $andalucia,
    "Galicia" => $galicia,
    'Extremadura' => $extremadura,
    'Madrid' => $madrid
];

var_dump($comunidades['Andalucia']);
echo "<hr>";
var_dump($comunidades['Extremadura']);
echo "<hr>";

echo $comunidades['Andalucia'][0];
echo "<br>";
echo $comunidades['Andalucia'][1];
echo "<hr>";

// foreach ($comunidades as $nombreComunidad => $provincias) {
//     echo "comunidades[$nombreComunidad] = "
// }


foreach ($comunidades as $nombre_comunidad => $provincias) {
    echo "<h3>$nombre_comunidad</h3>";
    echo "<ul>";

    foreach ($provincias as $indice => $provincia) {
        echo "<li>[$indice] $provincia</li>";
    }

    echo "</ul>";
    echo "<hr>";
}

echo "<hr>";
echo "forma nueva PROFESOR";

// foreach ($comunidades as $nombre_comunidad => $provincias) {
//     echo "<h3>$nombre_comunidad</h3>";
//     echo "<ul>";

//     foreach ($provincias as $indice) {
//         echo "<li>[$indice] </li>";
//     }

//     echo "</ul>";
//     echo "<hr>";
// }

echo "<hr>";


$vehiculo = ["coches", "motos", "camiones", "furgonetas", "bicicleta"];

$motor = ["electrico", "hibrido", "gasolina", "diesel"];

$color = ["rojo", "negro", "blanco"];

$marca = ["Mercedes"];

echo "<hr>";

$vehiculos =
    [
        'Vehiculo' => $vehiculo,
        'Motor' => $motor,
        'Color' => $color,
        'Marca' => $marca
    ];

// foreach ($vehiculos as $tipo_vehiculo => $tipos) {
//     echo "<h3>" . $tipo_vehiculo . " tipos " . "</h3>";
//     foreach ($tipos as $clave => $valor) {
//         echo '<ul>';
//         echo "<li>Vehiculo " . $clave . " tipos " . $valor . "</li>";
//         echo '</ul>';
//     }
// };

echo "<hr>";

// foreach ($vehiculos as $tipo_vehiculo => $tipos) {
//     echo "<h3>" . $tipo_vehiculo . " tipos " . "</h3>";
//     foreach ($tipos as $clave => $valor) {
//         echo '<ul>';
//         echo "<li>Vehiculo " . $valor . "</li>";
//         echo '</ul>';
//     }
// };

echo "<hr>";


foreach ($comunidades as $nombre_comunidad => $ciudad) {
    echo "<table align='center' border='1'>";
    echo "<th>";
    echo "<tr align='center' style='background-color:aqua'>";
    echo "<td colspan='2' $nombre_comunidad </td>";
    echo "</th>";
    foreach ($ciudad as $valor) {
        echo "<tr>";
        echo "<td>$valor</td>";
        echo "</tr>";
    }
}
echo "</table>";

echo "<hr>";
