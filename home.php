<?php get_header(); ?>
    <div class="wrap home-page">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <?php get_template_part('template-parts/slider', 'home'); ?>
                <div class="uk-position-bottom-center uk-position-small uk-text-center menu-widget">
                    <div class="uk-grid uk-text-center">
                        <?php for ($i = 1; $i <= 4; $i++): ?>
                            <div class="uk-padding <?= 'home-' . $i ?>">
                                <?php if ($i == 1): ?>
                                    <a href="/">
                                        <img src="<?= ot_get_option('logo') != null ? ot_get_option('logo') : get_template_directory_uri() . '/assets/images/logo.jpg' ?>"
                                             alt="" class="logo uk-position-top-left uk-padding-top-50">
                                    </a>
                                <?php endif; ?>
                                <?php dynamic_sidebar('home-' . $i); ?>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
                <button id="offcanvas-btn" class="uk-icon-button uk-margin-small-top uk-margin-small-right uk-position-top-right"
                   uk-icon="table" style="background-color: #000!important;"></button>
                <div class="uk-overlay uk-overlay-primary uk-position-left uk-animation-slide-left uk-width-300px uk-hidden"
                     id="offcanvas-content">
                    <?php wp_nav_menu(array('theme_location' => 'primary-menu')); ?>
                </div>
            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- .wrap -->
<?php get_footer();