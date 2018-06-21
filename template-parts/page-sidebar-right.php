<div class="uk-overlay uk-overlay-primary uk-position-right" style="width: 300px">
    <h3><?php echo get_the_title(); ?></h3>
    <div class="uk-panel uk-panel-scrollable uk-height-93">
        <?php
        while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; // end of the loop.
        ?>
    </div>
</div>