<div class="uk-overlay uk-overlay-primary uk-position-left uk-width-200px">
    <a href="<?= get_home_url() ?>">
        <img src="<?= (get_header_image() ? get_header_image() : get_template_directory_uri() . '/assets/images/logo.jpg'); ?>"
             alt="<?= (get_bloginfo('title')); ?>"/>
    </a>
    <div class="uk-padding uk-padding-remove-horizontal">
        <?php wp_nav_menu(array('theme_location' => 'primary-menu')); ?>
    </div>
</div>