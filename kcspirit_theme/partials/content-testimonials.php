<?php
$args = array(  
    'post_type' => 'testimonials',
    // 'post_status' => 'publish',
    'orderby' => 'rand',
    'posts_per_page' => 5,
);
$testimonials = new WP_Query( $args );
?>

<!-- Testimonial Slider -->
<section class="testimonials-slider">
    <div class="flex-container container">
        <div class="floated-image left top"><img src="<?php echo (!empty(get_field('testimonials_top_floated_image')) ? get_field('testimonials_top_floated_image') : get_stylesheet_directory_uri().'/images/group-circle.jpg'); ?>" alt="Group circle"></div>
        <div class="floated-image left bottom"><img src="<?php echo (!empty(get_field('testimonials_bottom_floated_image')) ? get_field('testimonials_bottom_floated_image') : get_stylesheet_directory_uri().'/images/pink-flower-petals.jpg'); ?>" alt="Pink flower petals"></div>
        <h2><?php the_field('testimonials_section_title', 9); ?></h2>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php
                    while ( $testimonials->have_posts() ) : $testimonials->the_post(); 
                ?>
                        <div class="swiper-slide">
                            <div class="slide-content-wrap">
                                <?php the_content(); ?>
                                <span class="client-name"><?php the_title(); ?></span>
                            </div>
                        </div>
                <?php
                    endwhile;
                ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <a class="button blue outline read-more" href="<?php echo get_post_type_archive_link('testimonials'); ?>" target="_self">read more testimonials</a>
    </div>
</section>

<?php wp_reset_postdata(); ?>