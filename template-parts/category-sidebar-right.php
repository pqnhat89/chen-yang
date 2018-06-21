<div class="uk-overlay uk-overlay-primary uk-position-right" style="width: 300px">
    <h3><?php echo single_cat_title(); ?></h3>
    <div class="uk-panel uk-panel-scrollable uk-height-93">
        <div class="uk-position-top-center uk-position-small">
            <?php if (have_posts()): ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php for ($i = 0; $i < 20; $i++): ?>
                        <a class="uk-padding-small" href="<?php echo the_permalink() ?>">
                            <div class="uk-grid">
                                <div class="uk-width-1-2 uk-text-small uk-margin-auto-vertical">
                                    <?php echo strtoupper(get_the_title()) ?>
                                    <br>
                                    <?php echo single_cat_title(); ?>
                                </div>
                                <div class="uk-width-1-2 post-image"><?php the_post_thumbnail() ?></div>
                            </div>
                        </a>
                    <?php endfor; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>