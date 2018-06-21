<div class="uk-overlay uk-overlay-primary uk-position-left" style="width: 200px">
    <a href="<?php echo get_home_url() ?>">
        <img src="<?php echo(get_header_image() ? get_header_image() : get_template_directory_uri() . '/assets/images/logo.jpg'); ?>"
             alt="<?php echo(get_bloginfo('title')); ?>"/>
    </a>
    <div class="uk-padding uk-padding-remove-horizontal">
        <?php wp_nav_menu(array('theme_location' => 'primary-menu')); ?>
    </div>
</div>