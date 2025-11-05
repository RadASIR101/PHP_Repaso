<?php

session_start();
session_destroy(); # Destruye la sesion 
header("Location:login.php"); # como href - redirige la pagina - no existe la pagina - se ejecuta solo
                              # se va a la url que le indique