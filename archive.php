<?php get_header(); ?>
    <div class="wrap">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <?php get_template_part('template-parts/slider', 'home'); ?>
                <?php get_template_part('template-parts/sidebar', 'left'); ?>
                <?php get_template_part('template-parts/category-sidebar', 'right'); ?>
            </main><!-- #main -->
        </div><!-- #primary -->
        <?php get_sidebar(); ?>
    </div><!-- .wrap -->
<?php get_footer();
