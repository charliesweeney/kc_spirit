<!-- Contact Info Block -->
<section class="contact-info">
    <div class="flex-container container">
        <div class="wrapper">
            <div class="text-block">
                <h2><?php the_field('contact_info_title'); ?></h2>
                <div>
                    <div class="info-wrap">
                        <p class="serif">Phone</p>
                        <a href="tel:<?php the_field('phone'); ?>"><?php the_field('phone'); ?></a>
                    </div>
                    
                    <div class="info-wrap">
                        <p class="serif">Email</p>
                        <a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a>
                    </div>
                    
                    <div class="info-wrap">
                        <p class="serif">Instagram</p>
                        <a rel="nofollow" href="https://www.instagram.com/<?php the_field('instagram'); ?>">@<?php the_field('instagram'); ?></a>
                    </div>
                    
                    <div class="info-wrap">
                        <p class="serif">Availability</p>
                        <p><?php the_field('standard_operating_hours'); ?></p>
                    </div>
                </div>
            </div>
            <div class="image-block">
                <div class="feature-image-mask">
                    <img src="<?php echo (!empty(get_field('contact_info_floated_image')) ? get_field('contact_info_floated_image') : get_stylesheet_directory_uri().'/images/map.jpg'); ?>" alt="" class="Map of Sydney"/>
                </div>
            </div>
        </div>
    </div>
</section>