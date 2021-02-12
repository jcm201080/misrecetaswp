<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="recetas,gastronomia,comer">
    <meta name="description" content="pagina web mis recetas">
    <link rel="icon" href="<?php echo get_stylesheet_directory(  ) ?>/resources/icono.png">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap">
    <?php wp_head(); ?>
  
</head>

<body>
    <div class="container">

        <header id="header" class="block-center-row mb-3">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/icono.png" alt="mis recetas">
        </header>
        <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'menu_id' => 'primary-menu',
                        'container' => 'nav',
                        'container_class' => 'nav-main block-center-row mb-2'
                    )
                );

            ?>  
        <!-- <nav class="nav-main fnt-lg block-center-row mb-3">
            <ul>
                <li>Inicio</li>
                <li class="separator">|</li>
                <li><a href="<?php echo get_stylesheet_directory_uri(); ?>/recetas.php"> recetas</a></li>
                <li class="separator">|</li> 
                <li><a href="<?php echo get_stylesheet_directory_uri(); ?>/contacto.html"> contactos </a></li>
            </ul>
        </nav>-->