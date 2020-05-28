<?php
$args = array(  
    'post_type' => 'testimonials',
    // 'post_status' => 'publish',
    'orderby' => 'rand',
    'posts_per_page' => -1,
);
$testimonials = new WP_Query( $args );
?>

<!-- Testimonial Slider -->
<section class="testimonials-list">
    <div class="flex-container container">
        <?php
            while ( $testimonials->have_posts() ) : $testimonials->the_post(); 
        ?>
            <div class="testimonial">
                <?php the_content(); ?>
                <span class="client-name">– <?php the_title(); ?></span>
            </div>
        <?php
            endwhile;
        ?>
    </div>
</section>

<?php wp_reset_postdata(); ?>