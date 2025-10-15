<?php

//----------------

function saludo($nombre = "Anonimo"): void
{
    echo "<br>Hola:<b> $nombre";
}

// Valor por defecto
saludo();

saludo("Juan");

saludo("Ines Maria");

echo "<hr>";

function saludos2($nombre  = "User", $pass = "default")
{
    echo "<br> Hola : <b> $nombre </b> , tu password es : $pass ";
}

echo "<hr>";
saludos2("Vicente",  "1234");
saludos2("Vicente");
saludos2("valor 1");
saludos2();

// como pasar solo el segundo parametro
saludos2(pass: "5678");
saludos2(nombre: "Pepe", pass: "5678");
saludos2(pass: "5678", nombre: "Pepe");
echo "<hr>";
