<!-- Split Block v2 - coloured bg  -->
<section class="split-block v2 blue-bg">
    <div class="flex-container container">
        <div class="floated-image right top"><img src="<?php echo (!empty(get_field('horizontal_floated_image')) ? get_field('horizontal_floated_image') : get_stylesheet_directory_uri().'/images/small-plane.jpg'); ?>" alt="Plane in the Clouds"></div>
        <div class="text-block">
            <h2 class="heading"><?php the_field('horizontal_title'); ?></h2>
            <p><?php the_field('horizontal_body_text'); ?></p>
        </div>
        <div class="image-block">
            <div class="feature-image-mask">
                <img src="<?php echo (!empty(get_field('horizontal_image')) ? get_field('horizontal_image') : get_stylesheet_directory_uri().'/images/studio-meeting.jpg'); ?>" alt="" class="feature-image"/>
            </div>
        </div>
    </div>
</section>