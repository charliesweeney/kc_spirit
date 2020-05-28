<!-- Split Block -->
<section class="split-block v1">
    <div class="flex-container container">
        <div class="floated-image left bottom"><img src="<?php echo (!empty(get_field('featured_floated_image')) ? get_field('featured_floated_image') : get_stylesheet_directory_uri().'/images/small-bird-clouds.png'); ?>" alt="" class="Birds in the clouds"/></div>
        <div class="image-block">
            <div class="feature-image-mask right-overlay">
                <img src="<?php echo (!empty(get_field('featured_floated_image')) ? get_field('featured_image') : get_stylesheet_directory_uri().'/images/charlotte-rowland.jpg'); ?>" alt="" class="Charlotte Rowland Portrait"/>
            </div>
        </div>
        <div class="text-block">
            <h2 class="offset-left"><?php the_field('featured_title'); ?></h2>
            <p><?php the_field('featured_body_text'); ?></p>
            <?php if (is_page(9)) { 
                $link = get_field('featured_button_link');
                if( $link ) {
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
                <div class="button-wrap"><a class="button blue outline" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a></div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</section>