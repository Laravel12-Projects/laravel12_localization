# Laravel con Lenguaje (idioma)

Este proyecto es un ejemplo de como podemos manejar lenguajes en Laravel. En este caso, estamos utilizando el paquete `laravel-vite-plugin` para manejar los recursos de la aplicación.

## Instalación

1. Clona el repositorio
2. Ejecuta `composer install` para instalar las dependencias
3. Ejecuta `npm install` para instalar las dependencias de Node
4. Ejecuta `npm run build` para construir los recursos de la aplicación
5. Ejecuta `php artisan key:generate` para generar la clave de la aplicación
6. Ejecuta `php artisan migrate` para ejecutar las migraciones de la base de datos
7. Ejecuta `php artisan serve` para levantar el servidor de desarrollo

## Uso

1. Abre el navegador y accede a `http://localhost:8000/`
2. Haz clic en el botón "Cambiar idioma" para cambiar el idioma de la aplicación
3. Selecciona el idioma deseado en el menú desplegable
4. La aplicación cambiará al idioma seleccionado

## Configuración

El idioma se configura en el archivo `config/app.php`. En este archivo, debes agregar el idioma que deseas que esté disponible en la aplicación.

Por ejemplo, para agregar el idioma español, debes agregar lo siguiente:
'locale' => 'es',

## Agregar un Nuevo Idioma

Para agregar un nuevo idioma, sigue los siguientes pasos:

1. Crea un nuevo archivo de idioma en el directorio `lang/{locale}` donde `{locale}` es el código del nuevo idioma. Por ejemplo, para agregar francés, crea el directorio `lang/fr` y los archivos necesarios como `auth.php`, `validation.php`, etc.

2. Asegúrate de que el archivo `lang/{locale}/info.php` contenga las traducciones adecuadas para las claves utilizadas en la aplicación.

3. Actualiza las rutas en `routes/web.php` para que incluyan el nuevo idioma si es necesario.

4. Si es necesario, actualiza las vistas en `resources/views` para utilizar las nuevas traducciones.

5. Finalmente, asegúrate de que el middleware de lenguaje esté configurado para manejar el nuevo idioma. Esto puede implicar actualizar el middleware en `app/Http/Middleware/Language.php` para incluir la lógica necesaria para cambiar al nuevo idioma.

Con estos pasos, deberías poder agregar soporte para un nuevo idioma a tu aplicación Laravel.

