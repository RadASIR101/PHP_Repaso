Para crear un usuario en MariaDB con todos los privilegios sobre una base de datos y sus tablas, el proceso general es el siguiente:

Crear el usuario con contraseña:

TODO SE GESTIONA CON USUARIO user0

```sql
CREATE USER 'user0'@'localhost' IDENTIFIED BY 'asd1';
```

Aquí usuario es el nombre del nuevo usuario y localhost indica que sólo podrá conectarse desde ese equipo (puede cambiarse por % para permitir conexiones desde cualquier host).

Conceder todos los privilegios en una base de datos específica (y sus tablas):

```sql
GRANT ALL PRIVILEGES ON crud1.* TO 'user0'@'localhost';
```

Aplicar los cambios para que tomen efecto inmediatamente:

```sql
FLUSH PRIVILEGES;
```

Con estos comandos el usuario tendrá control total (select, insert, update, delete, create, drop, etc.) sobre todas las tablas de la base de datos indicada.

Si desea otorgar todos los privilegios en todo el servidor (todas las bases de datos y tablas), el comando sería:

``sql
GRANT ALL PRIVILEGES ON *.* TO 'user0'@'localhost' WITH GRANT OPTION;
```

La opción `WITH GRANT OPTION` permite que el usuario también otorgue permisos a otros usuarios.

Finalmente, para conexiones remotas cambiar localhost por % en los comandos.

Este es un ejemplo básico y seguro para administración en MariaDB