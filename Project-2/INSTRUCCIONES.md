## Instrucciones estilizada en markdown (.md) o [Version de texto](https://github.com/acostaDemianAaron/PWD-2023/tree/main/Project-2/INSTRUCCIONES.txt)

#### Requisitos:
- **PHP**
- **MySQL**
  - Para corroborar el correcto funcionamiento de MySQL esta el boton "View Database" en el header de la pagina (En la parte superior derecha).
- Y en caso de no querer usar el servidor web integrado en php, deberan instalar un stack como WampServer, XAMPP, LAMP, etc.
- Descargar el repositorio en la carpeta que mas convenga.
- Agregar el usuario y contraseña de la base de datos en las lineas 29 y 30 del archivo _"Model/Connection/Database.php"_. Normalmente el usuario es root, si eligió otro nombre, por favor ingresarlo.
- Para crear la base de datos, se encuentra la query de MySQL en _"Model/SQL/infoautos.sql"_. Recomendamos su uso para crear la base de datos y sus tablas.

#### **Atencion:** Asegurarse que php tenga la extension de PDO habilitada.
1. para habilitarlo deben ir a **php.ini**, y encontrar la **extension=pdo_mysql** y descomentarlo _(Eliminar el **";"** al inicio)_.

2. El Archivo a modificar: (Normalmente php se instala en **C:\php** )

- ![archivo php.ini](https://i.imgur.com/snDHxRh.png)
- Si no se encuentra el archivo **php.ini**, modificar el nombre de **php.ini-development** y eliminar "**-development**" para que quede **php.ini**.

3. Se puede encontrar con las teclas **ctrl+F** o la opcion de "**Buscar**" dentro de "**Editar**" y buscar "**extension=pdo_mysql**".

- ![;extension=pdo_mysql a extension=pdo_mysql](https://i.imgur.com/Ewie8vt.png)
- Quitar el ; al inicio si hay alguno, para que quede igual a la foto anterior.
## Instrucciones con *PHP* y *MySQL*:

1. Abrir el repo desde cd y llegar a /Project-2/.
   - Por ejemplo: ![C:/ejemplo/a/carpeta/PWD-2023/Project-2/](https://i.imgur.com/YzXoWyv.png)
2. Ejecutar _**`php -S localhost:[puerto]`**_ donde `[puerto]` puede ser cualquier puerto habilitado en tu firewall.
   - Se recomienda **8000**, **8080** o **4040** que son puertos libres en la mayoria de maquinas.
3. Abrir desde un navegador la pagina _**`http://localhost:[puerto]/View/`**_
   - EJ: Si se ejecuta ![php -S localhost:8000](https://i.imgur.com/vfvCYQn.png) entonces entrar desde: _**http://localhost:8000/View/**_

## Instrucciones con WAMP, XAMPP y LAMP:

1. Mover los contenidos de la carpeta Project-2 a la carpeta del stack en uso.
   - Por ejemplo
      - en WAMP la carpeta es **wamp64/www/** o **wamp32/www/**
      - en XAMPP la carpeta es **XAMPP/htdocs/**
2. Ejecutar todos los servicios del stack.
3. Abrir la pagina _**http://localhost/View/**_
