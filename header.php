<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo("template_url"); ?> /css/all.min.css">
    <link rel="stylesheet" href="<?php bloginfo("template_url"); ?> /css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Oswald&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo("template_url"); ?> /css/estilos.css">
    <title>
        <?php if( is_home() ){
echo get_bloginfo("name");
        } elseif ( is_single() ) {
            echo the_title();
        } else {
            echo get_bloginfo("name");
        } ?>
    </title>

    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="logo col-12 col-md-6">
                    <a href="<?php bloginfo("url"); ?>"><img src="<?php bloginfo("template_url"); ?> /img/logolow.png" alt="Logo RandyCorp"></a>
                </div>

                <div class="redes-sociales col-12 col-sm-6">
                    <a class="telegram" href="https://t.me/RandyCorpYT" target="blank"><i
                            class="fab fa-telegram-plane"></i></a>
                    <a class="youtube" href="https://www.youtube.com/RandyCorp" target="blank"><i
                            class="fab fa-youtube"></i></a>
                    <a class="facebook" href="https://www.facebook.com/RandyCorpYT" target="blank"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="twitter" href="https://twitter.com/RandyCorpYT" target="blank"><i
                            class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>

        <nav class="menu">
            <div class="container">
                <div class="row">
                    <?php wp_nav_menu(array(
                        "container" => false,
                        "menu_class" => "",
                        "items_wrap" => '<ul class="col-md-12">%3$s</ul>',
                        "theme_location" => "menu-top"
                    )); ?>
                </div>
            </div>
        </nav>

        <!-- Soporte para widgets (Si existen widgets configurados, que los ejecute) -->
    <?php if ( !function_exists("dynamic_sidebar") || !dynamic_sidebar("Header") ) : endif; ?>
    </header>