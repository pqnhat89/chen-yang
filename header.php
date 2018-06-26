<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <?php if (wp_is_mobile()): ?>
        <style>
            <?php include_once 'inc/mobile.css' ?>
        </style>
    <?php endif; ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <header>

    </header><!-- #masthead -->
    <div class="site-content-contain">
        <div id="content" class="site-content">
            <div class="uk-overlay uk-position-left uk-width-250px uk-position-z-index">
                <a href="<?= get_home_url() ?>">
                    <img width="200"
                         src="<?= (get_header_image() ? get_header_image() : get_template_directory_uri() . '/assets/images/logo.png'); ?>"
                         alt="<?= (get_bloginfo('title')); ?>"/>
                </a>
            </div>
            <button id="offcanvas-btn"
                    class="uk-icon-button uk-margin-small-top uk-margin-small-right uk-position-top-right uk-position-z-index"
                    uk-icon="table" style="background-color: #000!important"></button>
            <div class="uk-overlay uk-overlay-primary uk-position-left uk-animation-slide-left uk-width-250px uk-hidden uk-position-z-index"
                 id="offcanvas-content">
                <a href="<?= get_home_url() ?>">
                    <img width="200"
                         src="<?= (get_header_image() ? get_header_image() : get_template_directory_uri() . '/assets/images/logo.png'); ?>"
                         alt="<?= (get_bloginfo('title')); ?>"/>
                </a>
                <div class="uk-panel-scrollable uk-height-80">
                <?php wp_nav_menu(array('theme_location' => 'primary-menu')); ?>
                </div>
            </div>