<?php 

// Quire Pay 

// Switch de Producción: use true para producción, use false para desarrollo. 

$production_switch = true; 

if ($production_switch) {

    // Definimos la URL principal y el nombre del sitio web 
    define('APP_URL','https://disenadorwebcancun.com/');
    define('APP_NAME','Tarjeta de negocios (Modo desarrollador)');

    // Apagamos la capacidad de mostrar errores
    ini_set('display_errors', false);
    ini_set('display_startup_errors', false);

    error_reporting(0);
    
} 

else {
    
    // Definimos la URL principal y el nombre del sitio web 
    define('APP_URL','http://localhost/tarjetas-app');
    define('APP_NAME','Tarjeta de negocios (Modo desarrollador)');

    // Encendemos la capacidad de mostrar errores
    ini_set('display_errors', true);
    ini_set('display_startup_errors', true);

    error_reporting(E_ALL);

}

// Configuramos la duración de la sesión.
$session_duration = 86400 * 30;
ini_set('session.cookie_lifetime', $session_duration);

// Seleccionamos la zona horaria a utilizar
date_default_timezone_set('America/Mexico_City');

define('APP_EMAIL','clientes@disenadorwebcancun.com');
define('APP_EMAIL_USER','clientes@disenadorwebcancun.com');
define('APP_EMAIL_PASSWORD','MlFLw$s^wOOl');
define('APP_EMAIL_SERVER','mail.disenadorwebcancun.com');