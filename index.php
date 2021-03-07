<?php 

// Tarjeta de negocios 1.0.0 > Inicio 
include('core/set.php');
include('core/core.php');

// Procesar modelos de datos necesarios.

// Cargar librerías a través de Composer.
require_once './vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader('./views');
$twig = new \Twig\Environment($loader);

// Comienza lógica del controlador > Inicio
session_start(); 

// Renderizamos vista > Inicio
$params = array(
    'app_name' => APP_NAME,
    'app_url' => APP_URL,
    'person_name' => 'Jonás Abarca Ponce',
    'person_phone' => '+52 (998) 494 0738',
    'person_mail' => 'jonasabarcaponce@outlook.com',
    'person_address' => 'Calle Ocotepec Edfi. 250 H<br> Fracc. Puerta del Sol, <br> Cancún, México',
    'card_name' => 'Diseñador web en Cancún',
    'card_introduction' => 'Me llamo <strong>Jonás</strong>. <br> Me dedico a crear páginas web y aplicaciones en la nube.',
    'page_title' => 'Diseñador web en Cancún',
    'page_content' => '<p style="font-size: 1.5rem;">Me gusta crear páginas web para ayudar a las personas a vender más.</p>',
);

echo $twig->render('index.html',$params);
