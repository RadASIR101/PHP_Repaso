<?php


session_start();
 
$_SESSION['usuario'] = "Manolo";
$_SESSION['email'] = "manolo@email.es";

echo <<<TXT
<a href="ejemplo2.php">Ir a la página 2</a>
TXT;