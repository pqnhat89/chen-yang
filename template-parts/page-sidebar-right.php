<div class="uk-overlay uk-overlay-primary uk-position-right uk-animation-slide-right uk-width-300px">
    <h3><?=  get_the_title(); ?></h3>
    <div class="uk-panel uk-panel-scrollable uk-height-93">
        <?php
        while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; // end of the loop.
        ?>
    </div>
</div>