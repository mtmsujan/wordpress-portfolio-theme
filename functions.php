<?php 
/**
 * wordpress portfolio theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wordpress_portfolio_theme
 */
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

// After setup theme
function wordpress_portfolio_theme_setup() {
    // Load text domain
    load_theme_textdomain( 'wordpress-portfolio-theme', get_template_directory() . '/languages' );

    // Add support for full and wide align images.
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('custom-header');
    add_theme_support('custom-background');
    add_theme_support('menu');

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'wordpress-portfolio-theme' ),
    ));

}
add_action( 'after_setup_theme', 'wordpress_portfolio_theme_setup' );

// Enqueue scripts and styles
function wordpress_portfolio_theme_scripts() {
    // Preconnect to Google Fonts
    echo '<link rel="preconnect" href="https://fonts.googleapis.com/">';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>';

    // Enqueue Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@100..900', array(), null);

    // Enqueue styles
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), null);
    wp_enqueue_style('swiper-css', get_template_directory_uri() . '/assets/css/swiper.scss.css', array(), null);
    wp_enqueue_style('locomotive-scroll-css', get_template_directory_uri() . '/assets/css/locomotive-scroll.min.css', array(), null);
    wp_enqueue_style('fancybox-css', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css', array(), null);
    wp_enqueue_style('global-css', get_template_directory_uri() . '/assets/css/global.css', array(), null);
    wp_enqueue_style('variables-css', get_template_directory_uri() . '/assets/css/variables.css', array(), null);
    wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/main2989.css', array(), '1635817336');
    wp_enqueue_style('stylesheet-css', get_template_directory_uri() . '/assets/css/stylesheet2989.css', array(), '1635817336');

   // Enqueue scripts
   wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js', array(), null, true);
   wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), null, true);
   wp_enqueue_script('swiper-js', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), null, true);
   wp_enqueue_script('gsap-js', get_template_directory_uri() . '/assets/js/gsap.min.js', array(), null, true);
   wp_enqueue_script('scrolltrigger-js', get_template_directory_uri() . '/assets/js/ScrollTrigger.min.js', array(), null, true);
   wp_enqueue_script('locomotive-scroll-js', get_template_directory_uri() . '/assets/js/locomotive-scroll.min.js', array(), null, true);
   wp_enqueue_script('mixitup-js', get_template_directory_uri() . '/assets/js/jquery.mixitup.min.js', array(), null, true);
   wp_enqueue_script('marquee-js', get_template_directory_uri() . '/assets/js/jquery.marquee.min.js', array(), null, true);
   wp_enqueue_script('fancybox-js', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array(), null, true);
   wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);

   // Enqueue additional script
   wp_enqueue_script('product-option-js', get_template_directory_uri() . '/catalog/view/theme/default/javascript/product_option.js', array(), null, true);

    // Enqueue the theme's main stylesheet
    wp_enqueue_style('wordpress-portfolio-theme-style', get_stylesheet_uri());
}

// Hook into the 'wp_enqueue_scripts' action
add_action('wp_enqueue_scripts', 'wordpress_portfolio_theme_scripts');
