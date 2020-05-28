<?php
/**
* Template Name: Booking
*/
	get_header();
?>
    <?php get_template_part( 'partials/content', 'fullscreen-hero' ); ?>
        
    <div class="booking-form-wrap">
        <div class="container">
            <iframe src="https://app.acuityscheduling.com/schedule.php?owner=19452029" title="Schedule Appointment" width="100%" height="800" frameBorder="0"></iframe><script src="https://embed.acuityscheduling.com/js/embed.js" type="text/javascript"></script>
        </div>
    </div>

    <?php get_template_part( 'partials/content', 'instagram-feed' ); ?>

    <?php get_footer() ?>