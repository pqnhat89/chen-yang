<?php get_header(); ?>
    <div class="wrap home-page">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <?php get_template_part('template-parts/page/content', 'slider'); ?>
                <div class="w-100 h-100 position-fixed b-0">
                    <div class="row h-100">
                        <div class="col-3"></div>
                        <div class="col-6">
                            <div class="row text-right h-100">
                                <?php for ($i = 1; $i <= 4; $i++): ?>
                                    <div class="col home-<?php echo $i ?>">
                                        <div class="position-absolute b-100 w-75">
                                            <?php dynamic_sidebar('home-' . $i); ?>
                                        </div>
                                    </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                        <div class="col-3"></div>
                    </div>
                </div>
            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- .wrap -->
<?php get_footer();