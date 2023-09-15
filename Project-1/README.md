## Instrucciones de uso

Requisito: Tener una version de php instalada. (Version testeada: 8.1)

1. Desde un terminal ingresar a la carpeta inicial del Repositorio.
   - Por Ejemplo: Si la carpeta se encuentra en "C:/usuario/descargas/PWD-2023" entonces ejecutar el comando "cd C:/usuario/descargas/PWD-2023"
2. Abrir un servidor php con el comando: _php -S localhost:4040_
3. Entrar desde un navegador a _http://localhost:4040/_


## Orden del proyecto

Las carpetas estan organizadas por TP, junto a un home e index que se ocupa de mantener las librerias y datos que no cambian en los sitios. En home se encuentra la pagina de menu y una carpeta con librerias, esto es para evitar repetir archivos.
En cada carpeta de TP, se encuentra cada ejercicio y dentro de la carpeta se sigue el modelo MVC. Todas los ejercicios piden las mismas librerias, asi que el header se ocupa de importar cada libreria desde la carpeta home.

