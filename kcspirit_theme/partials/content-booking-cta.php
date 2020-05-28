<!-- Booking Call-to-action -->
<section class="split-block v3">
    <div class="flex-container container">
        <div class="floated-image right top horizontal"><img src="<?php echo (!empty(get_field('booking_cta_horizontal_floated_image', 9)) ? get_field('booking_cta_horizontal_floated_image', 9) : get_stylesheet_directory_uri().'/images/light-blue-block.png');?>" alt="Light blue block"></div>
        <div class="floated-image right top portrait"><img src="<?php echo (!empty(get_field('booking_cta_portrait_floated_image', 9)) ? get_field('booking_cta_portrait_floated_image', 9) : get_stylesheet_directory_uri().'/images/circles.jpg'); ?>" alt="Circles"></div>
        <div class="image-block">
            <div class="feature-image-mask right-overlay">
                <img src="<?php echo (!empty(get_field('booking_cta_featured_image', 9)) ? get_field('booking_cta_featured_image', 9) : get_stylesheet_directory_uri().'/images/studio-setting.jpg'); ?>" alt="" class="feature-image"/>
            </div>
        </div>
        <div class="text-block">
            <h2 class="offset-left"><?php the_field('booking_cta_title', 9); ?></h2>
            <p><?php the_field('booking_cta_text', 9); ?></p>
            <?php
                $link = get_field('acuity_booking_link', 9);
                if( $link ) {
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
                <div class="button-wrap"><a class="button blue outline" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a></div>
            <?php } ?>
        </div>
    </div>
</section>