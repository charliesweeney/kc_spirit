<!-- Fullscreen Hero -->
<div class="<?php echo (!is_page(9) ? 'full-screen-hero internal' : 'full-screen-hero'); ?>" style="background-image: url(<?php echo (!empty(get_field('hero_image')) ? get_field('hero_image') : get_stylesheet_directory_uri().'/images/pink-blue-clouds.jpeg' ) ?>");">
    <div class="wrapper">
        <h1><span class="<?php echo (is_page(9) ? 'logo-font floated-logo' : 'logo-font'); ?>"><?php the_field('hero_logo_font_title'); ?></span><br><?php the_field('hero_main_title'); ?></h1>
        <?php 
            if (is_page(9)) {
                $link = get_field('acuity_booking_link', 9);
                if( $link ) {
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                    <a class="button white outline" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php 
                }
            } 
        ?>
    </div>
    <!-- <img src="<?php // echo (!empty(get_field('hero_image')) ? get_field('hero_image') : get_stylesheet_directory_uri().'/images/pink-blue-clouds.jpeg' ) ?>" alt="Blue Sky with clouds"> -->
</div>