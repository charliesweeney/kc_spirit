<!-- Fullscreen Internal Hero -->
<div class="full-screen-hero <?php (is_page(9) ? 'internal' : ''); ?>">
    <div class="wrapper">
        <h1><span class="logo-font"><?php the_field('hero_logo_font_title'); ?></span><br><?php the_field('hero_main_title'); ?></h1>
    </div>
    <img src="<?php (get_field('hero_logo_font_title') ? get_field('hero_logo_font_title') : get_stylesheet_directory_uri().'/images/light-blue-clouds.jpg' ) ?>" alt="Blue Sky with clouds">
</div>