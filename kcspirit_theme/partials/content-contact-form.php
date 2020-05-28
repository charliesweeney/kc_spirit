<!-- Contact Form -->
<section class="contact-form">
    <div class="flex-container container">
        <div class="floated-image left top"><img src="<?php echo (!empty(get_field('contact_form_floated_image_top_left')) ? get_field('contact_form_floated_image_top_left') : get_stylesheet_directory_uri().'/images/faded-clouds.jpg'); ?>" alt="Fade Clouds"></div>
        <div class="floated-image left bottom"><img src="<?php echo (!empty(get_field('contact_form_floated_image_bottom_left')) ? get_field('contact_form_floated_image_bottom_left') : get_stylesheet_directory_uri().'/images/pink-flower-petals.jpg'); ?>" alt="Pink Flower Petals"></div>
        <div class="floated-image right top portrait"><img src="<?php echo (!empty(get_field('contact_form_floated_image_top_right_portrait')) ? get_field('contact_form_floated_image_top_right_portrait') : get_stylesheet_directory_uri().'/images/portrait-blue.png'); ?>" alt="Blue colour"></div>
        <div class="floated-image right top horizontal"><img src="<?php echo (!empty(get_field('contact_form_floated_image_top_right_horizontal')) ? get_field('contact_form_floated_image_top_right_horizontal') : get_stylesheet_directory_uri().'/images/pink-clouds.png'); ?>" alt="Pink Clouds"></div>

        <div class="wrapper">
            <h2><?php the_field('contact_form_title'); ?></h2>
            <div class="form-wrap">
                <?php echo do_shortcode(get_field('contact_form_shortcode')); ?>
            </div>
        </div>
    </div>
</section>