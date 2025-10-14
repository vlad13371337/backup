<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
    <div class="header-inner">
        <div class="branding">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-title">
                <strong><?php bloginfo( 'name' ); ?></strong>
            </a>
            <span class="tagline">Boutique Advertising Studio in Paris</span>
        </div>
        <nav class="primary-navigation" aria-label="<?php esc_attr_e( 'Primary menu', 'paris-creative-agency' ); ?>">
            <?php
            wp_nav_menu(
                [
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'menu',
                    'fallback_cb'    => '__return_false',
                    'depth'          => 1,
                ]
            );
            ?>
        </nav>
    </div>
</header>
<main id="main" class="site-main">
