<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11" />

<title>KC Spirit | Charlotte Rowland</title>

<!-- <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicons/favicon-12.png" type="image/png" sizes="16x16"> -->
    
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/plugins/swiper/swiper.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/plugins/swiper/swiper.min.css">
    
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/reset.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style-responsive.css">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-163754018-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-163754018-1');
</script>


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php if(!is_page(5)) { ?>
<header>
    <div class="main-nav">
        <a class="nav-logo" href="<?php site_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/kcspirit_logo.png"></a>

        <?php
            //IUNCLUDE THE MAIN NAVIGATION
            wp_nav_menu(
                array(
                    'container'  => 'nav',
                    'container_class' => 'main-navigation',
                    'theme_location' => 'primary',
                )
            ); 
        ?>
        <?php
            $link = get_field('acuity_booking_link', 9);
            if( $link ) {
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
            <a class="book-now-cta button white outline" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php } ?>
    </div>
    
    <div class="mobile-nav">
        <a class="nav-logo" href="/index.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/kcspirit_logo.png"></a>
        <label for="overlay-input" id="overlay-button"><span></span></label>
        <div id="overlay">
            <?php
                //IUNCLUDE THE MAIN NAVIGATION
                wp_nav_menu(
                    array(
                        'container'  => 'nav',
                        'container_class' => 'main-navigation',
                        'theme_location' => 'primary',
                    )
                ); 
            ?>
        </div>
    </div>
</header>
<?php } ?>