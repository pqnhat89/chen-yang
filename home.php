<?php get_header(); ?>
    <div class="wrap home-page">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <div class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active"
                             style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/slide-1.jpg')"></div>
                        <div class="carousel-item"
                             style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/slide-2.jpg')"></div>
                        <div class="carousel-item"
                             style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/slide-3.jpg')"></div>
                    </div>
                </div>
                <div class="menu">
                    <div class="row h-100">
                        <div class="col-3"></div>
                        <div class="col-6">
                            <div class="row text-right h-100">
                                <div class="col home-1">
                                    <div class="position-absolute b-100">
                                        <?php dynamic_sidebar('home-1'); ?>
                                    </div>
                                </div>
                                <div class="col home-2">
                                    <div class="position-absolute b-100">
                                        <?php dynamic_sidebar('home-2'); ?>
                                    </div>
                                </div>
                                <div class="col home-3">
                                    <div class="position-absolute b-100">
                                        <?php dynamic_sidebar('home-3'); ?>
                                    </div>
                                </div>
                                <div class="col home-4">
                                    <div class="position-absolute b-100">
                                        <?php dynamic_sidebar('home-4'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3"></div>
                    </div>
                </div>
            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- .wrap -->
<?php get_footer();