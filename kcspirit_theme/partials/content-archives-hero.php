<!-- Fullscreen Hero -->
<div class="<?php echo (!is_page(9) ? 'full-screen-hero internal' : 'full-screen-hero'); ?>" style="background-image: url(<?php echo (!empty(get_field('hero_image')) ? get_field('hero_image') : get_stylesheet_directory_uri().'/images/pink-blue-clouds.jpeg' ) ?>");">
    <div class="wrapper">
        <h1><span class="logo-font">Our Clients</span><br>Testimonials</h1>
    </div>
    <!-- <img src="<?php // echo (!empty(get_field('hero_image')) ? get_field('hero_image') : get_stylesheet_directory_uri().'/images/pink-blue-clouds.jpeg' ) ?>" alt="Blue Sky with clouds"> -->
</div>