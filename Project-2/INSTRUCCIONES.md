### Instrucciones para cada metodo de servir el proyecto.

php -S:
   1 - Abrir el repo desde cd y llegar a /Project-2
   2 - Ejecutar php -S localhost:[puerto] donde [puerto] puede ser cualquier numero valido para tu firewall. Se recomienda 8000, 8080 o 4040 que son puertos libres en la mayoria de maquinas.
   3 - Abrir desde un navegador la pagina http://localhost:[puerto]/View/

   EJ: 
   Si se ejecuta "php -S localhost:8080" entonces entrar desde "http://localhost:8080/View/"


Atencion: Si se utiliza WAMP o XAMPP, settear la variable $PROYECTO en configuracion a "Project-2".
La linea 8 de configuracion.php se deberia ver asi: $PROYECTO ='Project-2';

WAMP:
   1 - Guardar la carpeta del repo en wamp64/www/ de forma que el directorio para llegar a View sea, por ejemplo: C:/user/servidores/wamp64/www/Project-2/View/
   2 - Abrir WAMP y ejecutar todos sus servicios.
   3 - Abrir desde el icono la pagina de wamp y agregar "/Project-2/View/" a la URL o abrir las carpetas Project-2 y View respectivamente.
      o abrir desde un navegador la URL "http://localhost/Project-2/View/"

XAMPP:
   2 - Guardar la carpeta del repo en xampp/htdocs/ de forma que el directorio para llegar a View sea, por ejemplo: C:/user/servidores/xampp/htdocs/Project-2/View/
   3 - Abrir XAMPP y ejecutar todos sus servicios.
   4 - Abrir desde un navegador la URL "http://localhost/Project-2/View/"
