# Guía rápida  

## Visión general

- Este repositorio es un set de ejercicios básicos de PHP (sin frameworks, sin Composer) pensados para docencia y práctica incremental.

- Arquitectura mínima: cada script es autónomo; no hay includes/autoload. La salida es mayoritariamente HTML simple con eco de variables y ejemplos de casting y tipos.

- Árbol relevante:

  - `ejemplo1/`: ejemplos intro (variables, cadenas/escape, casting, clases). Ej.: `ejemplo.php`, `dos.php`, `tres.php`, `ejemplo_clases.php`.

  - `IAW/TareaRepaso.php`: hoja de ejercicios secuenciales con soluciones en el mismo archivo.

  - `pruebas/`: ejemplo de `header('Location: ...')` (útil para recordar el timing de cabeceras).

  - Raíz web: `/var/www/html/index.html` (página por defecto de Apache) y `info.php` (phpinfo).

## Cómo ejecutar y depurar

- Entorno esperado: Apache con docroot en `/var/www/html`. Acceso típico:

  - `http://localhost/PHP_Repaso/ejemplo1/ejemplo.php`

  - `http://localhost/PHP_Repaso/IAW/TareaRepaso.php`

  - `http://localhost/info.php` para verificar PHP.

- Alternativa sin Apache (servidor embebido de PHP desde `/var/www/html`):

  - `php -S 0.0.0.0:8000 -t /var/www/html`

  - Luego: `http://localhost:8000/PHP_Repaso/ejemplo1/ejemplo.php`

- Lint rápido: `php -l ruta/al/archivo.php`.

- Para salida en navegador, usa `<br />`; para CLI usa `PHP_EOL` (ver `ejemplo1/dos.php`).

## Convenciones del proyecto (observadas)

- Idioma de código/comentarios: español.

- Mezcla de HTML + PHP en varios archivos. Se usa `<?= ... ?>` para salidas cortas (válido desde PHP 5.4+).

- Si el archivo es solo PHP, se prefiere omitir `?>` final para evitar problemas de cabeceras/espacios (comentado en `ejemplo1/dos.php`).

- Estilo de nombres (según `ejemplo1/ejemplo_clases.php` o `ejemplo1/ejemploClases.php`):

  - Clases en PascalCase: `MiClase`.

  - Funciones también en camelCase (no estándar en PHP, pero así está documentado en este repo): `miFuncionCompleta()`.

- Ejemplos usan `echo`, `var_dump()` y `gettype()` para inspección.

## Patrones y gotchas de este repo

- Cabeceras HTTP: si usas `header()`, no debe haber salida previa (ver `pruebas/index.php`). Evita espacios/bom antes de `<?php`.

- Casting y tipos: sigue el estilo de `ejemplo1/tres.php` (muestra valor y tipo, usa `echo` y `var_dump` con saltos de línea).

- Interpolación: cuando quieras interpolar variables, usa comillas dobles (`"...$var..."`); para literal, comillas simples.

- Hay ejemplos con errores intencionados para docencia (p. ej., `var_dump($var6)` indefinida en `ejemplo1/dos.php`, `"$pain"` tipográfico en `IAW/TareaRepaso.php`). Si tu objetivo no es mostrar el error, corrige o protege.

## Añadir nuevos ejercicios/ejemplos

- Mantén cada concepto en un archivo autónomo dentro de una carpeta existente (`ejemplo1/`, `IAW/`) o crea una nueva carpeta temática mínima.

- Incluye comentarios que expliquen la intención del ejemplo en español y muestra el resultado de forma visible en HTML (usa `<br />`).

- Si mezclas HTML y PHP: estructura como en `ejemplo1/ejemplo.php` (HTML básico, luego bloques `<?php ... ?>` y `<?= ... ?>`).

- Evita introducir dependencias externas o Composer salvo petición explícita. No cambies la jerarquía de rutas de Apache.

## Puntos de entrada y archivos de referencia

- `ejemplo1/ejemplo.php`: ejemplo de mezcla HTML/PHP y uso de `<?=`.

- `ejemplo1/dos.php`: escapes de comillas, `PHP_EOL`, y notas sobre cabeceras.

- `ejemplo1/tres.php`: casting entre tipos con `var_dump`/`gettype`.

- `ejemplo1/ejemplo_clases.php`: patrón de nombres para clases/funciones y ejemplo mínimo de clase/método.

- `pruebas/index.php`: redirect con `header('Location: ...')` como recordatorio del orden de salida.

---
 
