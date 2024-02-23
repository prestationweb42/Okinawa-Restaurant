<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Page d'accueil -->
    <?php if (is_front_page()) : ?>
        <meta name="description" content="C'est la meta-description de la page d'accueil" />
    <?php endif; ?>
    <!-- Page du blog -->
    <?php if (is_home()) : ?>
        <meta name="description" content="C'est la meta-description de la page du blog des articles" />
    <?php endif; ?>
    <!-- Page category -->
    <?php if (is_category()) : ?>
        <meta name="description" content="C'est la meta-description des articles avec la category <?php echo single_cat_title('', false); ?>" />
    <?php endif; ?>
    <!-- Page tags -->
    <?php if (is_tag()) : ?>
        <meta name=" description" content="C'est la meta-description des articles avec le tag ou étiquette <?php echo single_tag_title('', false); ?>" />
    <?php endif; ?>
    <!-- ------------ -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>
    <main class="main">
        <header class="header_desktop">
            <!-- Assignation du menu principal -->
            <!-- Logo avec lien sur accueil -->
            <!-- <a href="<?php echo home_url('/'); ?>" class="header_logo_link">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" class="header_logo_img"
                    alt="Logo">
            </a>
            <?php
            wp_nav_menu(
                array(
                    'menu' => 'top-menu', // nom du menu en interne
                    'theme_location' => 'primary', // doit correspondre avec le menu dans functions.php
                    'container' => 'ul', // afin d'éviter d'avoir une div autour 
                    'menu_class' => 'header__menu__desktop', // ma classe personnalisée 
                )
            );
            ?> -->
        </header>

        <!-- NavBar -->
        <nav class="navbar sticky-top navbar-expand-md navbar-dark bg-dark">
            <div class="container col-12 col-md-8">
                <!-- <a class="navbar-brand" href="<?php echo home_url('/'); ?>">Navbar</a> -->
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse text-white justify-content-center" id="main-menu">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => '',
                        'fallback_cb' => '__return_false',
                        // 'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                        'items_wrap' => '<ul id="%1$s" class="navbar-nav mb-2 mb-md-0 %2$s">%3$s</ul>',
                        'depth' => 3,
                        'walker' => new bs5_Walker()
                    ));
                    ?>
                </div>
            </div>
        </nav>