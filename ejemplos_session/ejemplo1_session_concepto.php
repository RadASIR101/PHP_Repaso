<?php
# Iniciar la sesión 
# Se debe llamar a session_start() antes de enviar cualquier salida al navegador
# Esto es necesario para poder utilizar variables de sesión
# Se usan las sesiones para mantener datos entre distintas páginas web
# Almacenar datos en la sesión
# Se hace asignando valores a la superglobal $_SESSION
# La sesiones se usan para mantener la información del usuario mientras navega por el sitio web
# Ya puedo utilizar las variables de sesión de sesion 

// Una sesión es como una mochila invisible que PHP entrega a cada visitante de tu web. Dentro puedes guardar datos (por ejemplo, el nombre de usuario) y estarán disponibles en todas las páginas mientras dure la visita. A diferencia de las variables normales, que desaparecen al terminar el script, las variables de sesión se mantienen activas hasta que el usuario cierre el navegador o la sesión expire.

 
# Variable de sesion 'usuario' con valor 'Juan'
 
# Mostrar el contenido de la variable de sesión
# Esto es útil para depuración
# Echo tuneado para mostrar el array de sesión
 