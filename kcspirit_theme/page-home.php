<?php
/**
* Template Name: Home Page
*/
	get_header();
?>
    <?php get_template_part( 'partials/content', 'fullscreen-hero' ); ?>
    <?php get_template_part( 'partials/content', 'split-block-v1' ); ?>
    <?php get_template_part( 'partials/content', 'split-block-v2' ); ?>
    <?php get_template_part( 'partials/content', 'testimonials' ); ?>
    <?php get_template_part( 'partials/content', 'booking-cta' ); ?>
    <?php get_template_part( 'partials/content', 'instagram-feed' ); ?>

    <?php get_footer() ?>