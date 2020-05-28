<section class="instagram-block">
    <div class="half-color-bg blue-bg"></div>
    <div class="flex-container container">
        <h2 class="heading"><?php the_field('instagram_title', 9);?> <span class="logo-font">KC</span>.<span class="logo-font">Spirit</span></h2>
        <!-- <div class="insta-feed">
        </div> -->
        <?php echo do_shortcode('[instagram-feed]'); ?>
        <?php
            $link = get_field('instagram_button', 9);
            if( $link ) {
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
            <div class="button-wrap"><a rel="nofollow" class="button blue outline" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a></div>
        <?php } ?>
    </div>
</section>