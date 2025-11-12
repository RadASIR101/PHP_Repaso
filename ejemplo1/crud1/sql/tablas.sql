ESTAMOS USANDO LA TABLA DE MARIADB de HOTELES 

RUTA COMPLETA -> C:\hoteles\docker-compose.yml


GRANT ALL PRIVILEGES ON nombre_base_datos.* TO 'crud'@'localhost';

FLUSH PRIVILEGES;

GRANT ALL PRIVILEGES ON *.* TO 'crud'@'localhost' WITH GRANT OPTION;