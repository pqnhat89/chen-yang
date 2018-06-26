<div class="uk-overlay uk-overlay-primary uk-position-right uk-animation-slide-right uk-width-300px">
    <h3><?= single_cat_title(); ?></h3>
    <div class="uk-panel uk-panel-scrollable uk-height-93">
        <div class="uk-position-top-center uk-position-small">
            <?php if (have_posts()): ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php for ($i = 0; $i < 20; $i++): ?>
                        <a class="uk-margin-small" href="<?= the_permalink() ?>">
                            <div class="uk-grid uk-padding-bottom-3 uk-padding-top-3" style="border-bottom: 1px dashed rgba(0,0,0,.5);">
                                <div class="uk-width-3-5 uk-text-small uk-margin-auto-vertical uk-padding-left-25">
                                    <?= strtoupper(get_the_title()) ?>
                                    <br>
                                    <span class="uk-text-10"><?= single_cat_title(); ?></span>
                                </div>
                                <div class="uk-width-2-5 uk-padding-remove post-image"><?php the_post_thumbnail() ?></div>
                            </div>
                        </a>
                    <?php endfor; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>