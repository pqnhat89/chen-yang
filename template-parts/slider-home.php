<div class="uk-position-relative uk-visible-toggle uk-light" uk-slideshow="autoplay: true; animation: fade;">
    <ul class="uk-slideshow-items" uk-height-viewport="height: 100%">
        <li>
            <img src="<?=  ot_get_option('slide_1') != null ? ot_get_option('slide_1') : get_template_directory_uri() . '/assets/images/slide-1.jpg' ?>"
                 alt="" class="uk-cover">
            <div class="uk-position-center uk-position-small uk-text-center">
            </div>
        </li>
        <li>
            <img src="<?=  ot_get_option('slide_2') != null ? ot_get_option('slide_1') : get_template_directory_uri() . '/assets/images/slide-2.jpg' ?>"
                 alt="" class="uk-cover">
            <div class="uk-position-center uk-position-small uk-text-center">
            </div>
        </li>
        <li>
            <img src="<?=  ot_get_option('slide_3') != null ? ot_get_option('slide_1') : get_template_directory_uri() . '/assets/images/slide-3.jpg' ?>"
                 alt="" class="uk-cover">
        </li>
    </ul>
</div>