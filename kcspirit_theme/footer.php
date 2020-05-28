<?php
/*
 * The template for displaying the footer.
 */
?>

<?php if(!is_page(5)) { ?>

<footer>
    <div class="flex-container container">
        <div class="logo"><img src="<?php the_field('footer_logo', 9); ?>" alt="KC Spirit logo"></div>
        <div class="social-links">
            <a href="<?php the_field('instagram', 9) ?>"><img src="<?php echo get_stylesheet_directory_uri().'/images/icons/instagram-icon.png'; ?>" alt="" class="social-icon"></a>
            <a href="<?php the_field('facebook', 9) ?>"><img src="<?php echo get_stylesheet_directory_uri().'/images/icons/facebook-icon.png'; ?>" alt="" class="social-icon"></a>
            <a href="mailto:<?php the_field('email', 9) ?>"><img id="email-icon" src="<?php echo get_stylesheet_directory_uri().'/images/icons/email-icon.png'; ?>" alt="" class="social-icon"></a>
        </div>
    </div>
</footer>
<?php } ?>

<?php wp_footer(); ?>
</body>
</html>
