<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> | <?php echo is_front_page() ? 'Home' : get_the_title(); ?></title>

    <!-- Open Graph Meta Tags -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php bloginfo('name'); ?> | <?php echo is_front_page() ? 'Home' : get_the_title(); ?>">
    <meta property="og:description" content="Official municipal website for Mountain Crest City—resident services, trail access, and community resources.">
    <meta property="og:url" content="<?php echo esc_url(is_front_page() ? home_url('/') : get_permalink()); ?>">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/logo.png">
    <meta property="og:logo" content="<?php echo get_template_directory_uri(); ?>/images/logo.png">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url( get_template_directory_uri() . '/images/apple-touch-icon.png' ); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url( get_template_directory_uri() . '/images/favicon-32x32.png' ); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url( get_template_directory_uri() . '/images/favicon-16x16.png' ); ?>">
    <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() . '/images/favicon.ico' ); ?>">
    <link rel="manifest" href="<?php echo esc_url( get_template_directory_uri() . '/images/site.webmanifest' ); ?>">
    <script src="<?php echo esc_url( get_template_directory_uri() . '/scripts/scripts.js' ); ?>" defer></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="header-container">
            <div class="brand-logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Mountain Crest City Logo">
                </a>
                <span class="site-title">Mountain Crest City</span>
            </div>
            <button class="mobile-menu-btn" aria-label="Toggle Menu">&#9776;</button>
        </div>
        <nav class="main-nav">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'site-nav'
            ));
            ?>
        </nav>
    </header>