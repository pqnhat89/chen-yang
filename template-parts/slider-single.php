<?php while (have_posts()) : the_post() ?>
    <?php $images = get_post_meta(get_the_ID(), 'gallery_images') ?>
    <?php $images = explode(',', $images[0]) ?>
    <div class="uk-position-relative uk-visible-toggle uk-light" uk-slideshow="autoplay: true; animation: fade;">
    <ul class="uk-slideshow-items" uk-height-viewport="height: 100%">
        <?php foreach ($images as $image): ?>
            <li>
                <img src="<?= wp_get_attachment_image_src($image, 'full')[0] ?>" class="uk-cover">
                <div class="uk-position-center uk-position-small uk-text-center">
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
    <div class="uk-overlay uk-overlay-primary uk-position-right uk-animation-slide-right uk-width-300px uk-margin-right-100 uk-hidden"
         id="concept-content">
        <?= the_content() ?>
    </div>
    <div class="uk-overlay uk-overlay-primary uk-position-right uk-animation-slide-right uk-width-100px">
        <div class="uk-position-center-right uk-position-small">
            <ul class="uk-thumbnav uk-thumbnav-vertical ">
                <?php foreach ($images as $k => $image): ?>
                    <li uk-slideshow-item="<?= $k ?>">
                        <a href="#">
                            <img src="<?= wp_get_attachment_image_src($image, 'full')[0] ?>" width="70">
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="uk-position-top-center uk-position-small uk-padding-top-30">
            <?= strtoupper(get_the_title()) ?>
        </div>
        <div class="uk-position-bottom-center uk-position-small uk-padding-bottom-10">
            <a id="concept">CONCEPT</a>
        </div>
    </div>
<?php endwhile;