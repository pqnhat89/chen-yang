<div class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active"
             style="background-image: url('<?php echo ot_get_option('slide_1') != null ? ot_get_option('slide_1') : get_template_directory_uri() . '/assets/images/slide-1.jpg' ?>')"></div>
        <div class="carousel-item"
             style="background-image: url('<?php echo ot_get_option('slide_1') != null ? ot_get_option('slide_2') : get_template_directory_uri() . '/assets/images/slide-2.jpg' ?>')"></div>
        <div class="carousel-item"
             style="background-image: url('<?php echo ot_get_option('slide_1') != null ? ot_get_option('slide_3') : get_template_directory_uri() . '/assets/images/slide-3.jpg' ?>')"></div>
    </div>
</div>