<?php get_header(); ?>
    <div class="wrap">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <?php get_template_part('template-parts/page/content', 'slider'); ?>
                <div class="w-100 h-100 position-fixed b-0">
                    <div class="row h-100">
                        <div class="left-sidebar">
                            <?php get_template_part('template-parts/page/content', 'left-sidebar'); ?>
                        </div>
                    </div>
                </div>
            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- .wrap -->
<?php get_footer();
