<?php get_header(); ?>
    <div class="wrap home-page">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <?php get_template_part('template-parts/slider', 'home'); ?>
                <div class="uk-position-bottom-center uk-position-small uk-text-center">
                    <div class="uk-grid uk-text-center">
                        <?php for ($i = 1; $i <= 4; $i++): ?>
                            <div class="uk-padding <?php echo 'home-' . $i ?>">
                                <?php if ($i == 1): ?>
                                    <img src="<?php echo ot_get_option('logo') != null ? ot_get_option('logo') : get_template_directory_uri() . '/assets/images/logo.jpg' ?>"
                                         alt="" class="logo uk-position-top-left">
                                <?php endif; ?>
                                <?php dynamic_sidebar('home-' . $i); ?>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- .wrap -->
<?php get_footer();