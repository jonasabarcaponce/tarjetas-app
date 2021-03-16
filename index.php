<?php 

// Tarjeta de negocios 1.0.0 > Inicio 
include('core/set.php');
include('core/core.php');

// Procesar modelos de datos necesarios.
$Negocios = new Negocios(); 
$Usuarios = new Usuarios(); 

// Cargar librerías a través de Composer.
require_once './vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader('./views');
$twig = new \Twig\Environment($loader);

// Comienza lógica del controlador > Inicio
session_start(); 

$nombre_de_usuario = $_GET['usuario'];

$informacion_negocio = $Negocios->obtener_informacion($nombre_de_usuario);
$informacion_representante = $Usuarios->obtener_informacion($informacion_negocio['propietario']);

if(isset($nombre_de_usuario)) {

    if($informacion_negocio > 1 ) {

        // Renderizamos vista > Inicio


        // Generador de contenidos. 

        $para_quien_es = 0;

        switch($para_quien_es) {    



        }

        $params = array(
            'app_name' => APP_NAME,
            'app_url' => APP_URL,
            'person_name' => $informacion_representante['nombre'],
            'person_phone' => '52'. $informacion_representante['whatsapp'],
            'person_mail' => $informacion_representante['correo'],
            'person_address' => 'Calle Ocotepec Edfi. 250 H<br> Fracc. Puerta del Sol, <br> Cancún, México',
            'card_name' => $informacion_negocio['negocio'],
            'card_introduction' => 'Me llamo <strong>'. explode(' ',trim($informacion_representante['nombre']))[0] .'</strong>. <br> Me dedico a hacer network marketing y cuidar el planeta.',
            'page_title' => $informacion_negocio['negocio'],
            'page_content' => $informacion_negocio['objeto'],
            'facebook' => $informacion_negocio['facebook'],
            'instagram' => $informacion_negocio['instagram'],
            'profile_photo' => $informacion_negocio['perfil'],
            'cover_photo' => $informacion_negocio['portada'],
            'page_main_color' => $informacion_negocio['color']
        );

        echo $twig->render('index.html',$params);

    } else {
        echo $nombre_de_usuario;
    }
        
}

