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

class WP_Custom_Navwalker extends Walker_Nav_Menu {
    private $delay = 0;

    // Start the element output.
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $delay = number_format($this->delay, 1);
        $output .= sprintf(
            "\n<li style='animation-delay: %ss'><a href='%s' class='%s'>%s</a></li>\n",
            $delay,
            esc_url($item->url),
            'fs-48 fw-700 text-uppercase',
            apply_filters('the_title', $item->title, $item->ID)
        );
        $this->delay += 0.1;
    }
}

// Register Project Custom post type
function register_project_post_type() {
    $labels = array(
        'name'               => _x( 'Projects', 'post type general name', 'wordpress-portfolio-theme' ),
        'singular_name'      => _x( 'Project', 'post type singular name', 'wordpress-portfolio-theme' ),
        'menu_name'          => _x( 'Projects', 'admin menu', 'wordpress-portfolio-theme' ),
        'name_admin_bar'     => _x( 'Project', 'add new on admin bar', 'wordpress-portfolio-theme' ),
        'add_new'            => _x( 'Add New', 'project', 'wordpress-portfolio-theme' ),
        'add_new_item'       => __( 'Add New Project', 'wordpress-portfolio-theme' ),
        'new_item'           => __( 'New Project', 'wordpress-portfolio-theme' ),
        'edit_item'          => __( 'Edit Project', 'wordpress-portfolio-theme' ),
        'view_item'          => __( 'View Project', 'wordpress-portfolio-theme' ),
        'all_items'          => __( 'All Projects', 'wordpress-portfolio-theme' ),
        'search_items'       => __( 'Search Projects', 'wordpress-portfolio-theme' ),
        'parent_item_colon'  => __( 'Parent Projects:', 'wordpress-portfolio-theme' ),
        'not_found'          => __( 'No projects found.', 'wordpress-portfolio-theme' ),
        'not_found_in_trash' => __( 'No projects found in Trash.', 'wordpress-portfolio-theme' )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'project' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        'menu_icon'          => 'dashicons-portfolio',
    );

    register_post_type( 'project', $args );
}

add_action( 'init', 'register_project_post_type' );



// Add the theme's customize support
add_action( 'customize_register', 'my_theme_customize_register' );

function my_theme_customize_register( $wp_customize ) {
    // Add a section for the freelance availability message
    $wp_customize->add_section( 'freelance_availability_section', array(
        'title'    => __( 'Freelance Availability', 'wordpress-portfolio-theme' ),
        'priority' => 160,
    ) );

    // Add a setting for the freelance availability message
    $wp_customize->add_setting( 'freelance_availability_message', array(
        'default'   => __( 'Available for freelance projects from 18th July', 'wordpress-portfolio-theme' ),
        'transport' => 'refresh',
    ) );

    // Add a control for the freelance availability message
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'freelance_availability_message_control', array(
        'label'    => __( 'Freelance Availability Message', 'wordpress-portfolio-theme' ),
        'section'  => 'freelance_availability_section',
        'settings' => 'freelance_availability_message',
        'type'     => 'textarea',
    ) ) );

    // Hero section
    $wp_customize->add_section( 'hero_section', array(
        'title'    => __( 'Hero Section', 'wordpress-portfolio-theme' ),
        'priority' => 170,
    ));

    // Default hero section background image
    $default_image_url = get_template_directory_uri() . '/assets/img/cache/catalog/1-dungbubu/dungbu-portrait-blackbg-0x0.png';
    // Add a setting for the hero image
    $wp_customize->add_setting( 'hero_image', array(
        'default'   => $default_image_url,
        'transport' => 'refresh',
    ) );

    // Add a control for the hero image
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'hero_image_control', array(
        'label'    => __( 'Hero Section Background Image', 'wordpress-portfolio-theme' ),
        'section'  => 'hero_section',
        'settings' => 'hero_image',
    ) ) );

    // Hero section title
    $wp_customize->add_setting( 'hero_title', array(
        'default'   => 'Freelance Digital designer',
        'transport' => 'refresh',
    ) );

    // Add a control for the hero title
    $wp_customize->add_control( 'hero_title_control', array(
        'label'    => __( 'Hero Section Title', 'wordpress-portfolio-theme' ),
        'section'  => 'hero_section',
        'settings' => 'hero_title',
        'default'  => 'Freelance Digital designer',
        'placeholder' => 'Enter your title here',
        'type'     => 'text',
    ) );

    // Hero section email address
    $wp_customize->add_setting('hero_email', array(
        'default'   => 'example@example.com',
        'transport' => 'refresh',
    ));

    // Add a control for the hero email address
    $wp_customize->add_control('hero_email_control', array(
        'label'    => __( 'Hero Section Email Address', 'wordpress-portfolio-theme' ),
        'section'  => 'hero_section',
        'settings' => 'hero_email',
        'default'  => 'example@example.com',
        'placeholder' => 'Enter your email address here',
        'type'     => 'text',
    ));

    // Hero section phone number
    $wp_customize->add_setting('hero_phone', array(
        'default'   => '+84 123 456 789',
        'transport' => 'refresh',
    ));

    // Add a control for the hero phone number
    $wp_customize->add_control('hero_phone_control', array(
        'label'    => __( 'Hero Section Phone Number', 'wordpress-portfolio-theme' ),
        'section'  => 'hero_section',
        'settings' => 'hero_phone',
        'default'  => '+84 123 456 789',
        'placeholder' => 'Enter your phone number here',
        'type'     => 'text',
    ));

    // Hero Section Facebook label
    $wp_customize->add_setting( 'hero_facebook_label', array(
        'default'   => 'Facebook',
        'transport' => 'refresh',
    ) );

    // Add a control for the hero facebook label
    $wp_customize->add_control( 'hero_facebook_label_control', array(
        'label'    => __( 'Hero Section Facebook Label', 'wordpress-portfolio-theme' ),
        'section'  => 'hero_section',
        'settings' => 'hero_facebook_label',
        'default'  => 'Facebook',
        'placeholder' => 'Enter your facebook label here',
        'type'     => 'text',
    ));

    // Hero section facebook link
    $wp_customize->add_setting('hero_facebook', array(
        'default'   => 'https://www.facebook.com/grocoder',
        'transport' => 'refresh',
    ));

    // Add a control for the hero facebook link
    $wp_customize->add_control('hero_facebook_control', array(
        'label'    => __( 'Hero Section Facebook Link', 'wordpress-portfolio-theme' ),
        'section'  => 'hero_section',
        'settings' => 'hero_facebook',
        'default'  => 'https://www.facebook.com/grocoder',
        'placeholder' => 'Enter your facebook link here',
        'type'     => 'text',
    ));

    // Hero Section Instagram label
    $wp_customize->add_setting( 'hero_instagram_label', array(
        'default'   => 'Instagram',
        'transport' => 'refresh',
    ) );

    // Add a control for the hero instagram label
    $wp_customize->add_control( 'hero_instagram_label_control', array(
        'label'    => __( 'Hero Section Instagram Label', 'wordpress-portfolio-theme' ),
        'section'  => 'hero_section',
        'settings' => 'hero_instagram_label',
        'default'  => 'Instagram',
        'placeholder' => 'Enter your instagram label here',
        'type'     => 'text',
    ));

    // Hero section instagram link
    $wp_customize->add_setting('hero_instagram', array(
        'default'   => 'https://www.instagram.com/grocoder',
        'transport' => 'refresh',
    ));

    // Add a control for the hero instagram link
    $wp_customize->add_control('hero_instagram_control', array(
        'label'    => __( 'Hero Section Instagram Link', 'wordpress-portfolio-theme' ),
        'section'  => 'hero_section',
        'settings' => 'hero_instagram',
        'default'  => 'https://www.instagram.com/grocoder',
        'placeholder' => 'Enter your instagram link here',
        'type'     => 'text',
    ));

    // Hero Section Telegram label
    $wp_customize->add_setting( 'hero_telegram_label', array(
        'default'   => 'Telegram',
        'transport' => 'refresh',
    ) );

    // Add a control for the hero telegram label
    $wp_customize->add_control( 'hero_telegram_label_control', array(
        'label'    => __( 'Hero Section Telegram Label', 'wordpress-portfolio-theme' ),
        'section'  => 'hero_section',
        'settings' => 'hero_telegram_label',
        'default'  => 'Telegram',
        'placeholder' => 'Enter your telegram label here',
        'type'     => 'text',   
    ));

    // Hero section telegram link
    $wp_customize->add_setting('hero_telegram', array(
        'default'   => 'https://t.me/grocoder',
        'transport' => 'refresh',
    ));

    // Add a control for the hero telegram link
    $wp_customize->add_control('hero_telegram_control', array(
        'label'    => __( 'Hero Section Telegram Link', 'wordpress-portfolio-theme' ),
        'section'  => 'hero_section',
        'settings' => 'hero_telegram',
        'default'  => 'https://t.me/grocoder',
        'placeholder' => 'Enter your telegram link here',
        'type'     => 'text',
    ));
    
    // Hero Section Hade line
    $wp_customize->add_setting( 'hero_hade_line', array(
        'default'   => 'Business website, Ecommerce website, Landingpage, Mobile app, Ui design, Motion graphic, Powerpoint presentation, Company profile, Social media, Business website, Ecommerce website, Landingpage, Mobile app, Ui design, Motion graphic, Powerpoint presentation, Company profile, Social media',
        'transport' => 'refresh',
    ) );
    
    // Add a control for the hero hade line
    $wp_customize->add_control( 'hero_hade_line_control', array(
        'label'    => __( 'Hero Section Hade Line', 'wordpress-portfolio-theme' ),
        'section'  => 'hero_section',
        'settings' => 'hero_hade_line',
        'default'  => 'Business website, Ecommerce website, Landingpage, Mobile app, Ui design, Motion graphic, Powerpoint presentation, Company profile, Social media, Business website, Ecommerce website, Landingpage, Mobile app, Ui design, Motion graphic, Powerpoint presentation, Company profile, Social media',
        'placeholder' => 'Enter your hade line here',
        'type'     => 'textarea',
    ));

    // Website Preloder
    $wp_customize->add_setting( 'website_preloder', array(
        'default'   => 'Dungbubu Portfolio',
        'transport' => 'refresh',
    ) );

    // Add a control for the website preloder
    $wp_customize->add_control( 'website_preloder_control', array(
        'label'    => __( 'Website Preloder (Only Use in Two Words)', 'wordpress-portfolio-theme' ),
        'section'  => 'hero_section',
        'settings' => 'website_preloder',
        'default'  => 'Dungbubu Portfolio',
        'placeholder' => 'Enter your website preloder here',
        'type'     => 'text',
    ));

    // Expect Section in Home page
    $wp_customize->add_setting( 'expect_section', array(
        'title'    => __( 'Expect Section', 'wordpress-portfolio-theme' ),
        'priority' => 200,
    ));

    // Add a section for the expect section
    $wp_customize->add_section( 'expect_section', array(
        'title'    => __( 'Expect Section Heding', 'wordpress-portfolio-theme' ),
        'transport' => 'refresh',
    ));

    // Add a setting for the expect section
    $wp_customize->add_control( 'expect_section_control', array(
        'label'    => __( 'Expect Section', 'wordpress-portfolio-theme' ),
        'section'  => 'expect_section',
        'settings' => 'expect_section',
        'default'  => 'I prioritize tidy layouts, clean typography, and meticulous alignment to ensure user-friendly products. With a passion for minimalism, I aim to maximize the impact of brands messages, stories, and images in each of my designs',
        'placeholder' => 'Enter your expect section here',
        'type'     => 'text',
    ));

    // add Service list
    $wp_customize->add_setting( 'service_list', array(
        'Default'    => __( 'Service List', 'wordpress-portfolio-theme' ),
        'transport' => 'refresh',
    ));

    // Add a setting for the service list
    $wp_customize->add_control( 'service_list_control', array(
        'label'    => __( 'Service List', 'wordpress-portfolio-theme' ),
        'section'  => 'expect_section',
        'settings' => 'service_list',
        'default'  => 'Business website, Ecommerce website, Landingpage, Mobile app, Ui design, Motion graphic, Powerpoint presentation, Company profile, Social media',
        'placeholder' => 'Enter your service list here',
        'type'     => 'textarea',
    ));

    // add Expert Content
    $wp_customize->add_setting( 'expert_content', array(
        'Default'    => __( 'Expert Description', 'wordpress-portfolio-theme' ),
        'transport' => 'refresh',
    ));

    // Add a setting for the expert content
    $wp_customize->add_control( 'expert_content_control', array(
        'label'    => __( 'Expert Description', 'wordpress-portfolio-theme' ),
        'section'  => 'expect_section',
        'settings' => 'expert_content',
        'default'  => 'With a background in training and designing slides for domestic enterprises for many years, I have a deep understanding of layout presentation, content handling, and working with motion effects. Now, I bring that experience to web design along with my knowledge of front-end programming to create more great websites',
        'placeholder' => 'Enter your expert content here',
        'type'     => 'textarea',
    ));

    // Add a button text expert section
    $wp_customize->add_setting( 'expert_button_text', array(
        'Default'    => __( 'Button Text', 'wordpress-portfolio-theme' ),
        'transport' => 'refresh',
    ));

    // Add a setting for the button text expert section
    $wp_customize->add_control( 'expert_button_text_control', array(
        'label'    => __( 'Button Text', 'wordpress-portfolio-theme' ),
        'section'  => 'expect_section',
        'settings' => 'expert_button_text',
        'default'  => 'More about me',
        'placeholder' => 'Enter your button text here',
        'type'     => 'text',
    ));

    // Add a button url expert section
    $wp_customize->add_setting( 'expert_button_url', array(
        'Default'    => __( 'Button Url', 'wordpress-portfolio-theme' ),
        'sanitize_callback' => 'esc_url_raw', // Sanitize the URL
        'transport' => 'refresh',
    ));

    // Add a setting for the button url expert section
    $wp_customize->add_control( 'expert_button_url_control', array(
        'label'    => __( 'Button Url', 'wordpress-portfolio-theme' ),
        'section'  => 'expect_section',
        'settings' => 'expert_button_url',
        'default'  => '#',
        'placeholder' => 'Enter your button url here',
        'type'     => 'url',
    ));

    // Add a section for the Project Section
    $wp_customize->add_section('project_section', array(
        'title'    => __('Project Section', 'wordpress-portfolio-theme'),
        'priority' => 180,
    ));

    // Add a setting for the Project Section title
    $wp_customize->add_setting('project_section_title', array(
        'default'           => 'Some of the most impressive projects I have worked',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));

    // Add a control for the Project Section title
    $wp_customize->add_control('project_section_title_control', array(
        'label'       => __('Project Section Title', 'wordpress-portfolio-theme'),
        'section'     => 'project_section',
        'settings'    => 'project_section_title',
        'type'        => 'text',
        'placeholder' => 'Enter your project section title here',
    ));

    // Add a setting for the Project Section description
    $wp_customize->add_setting('project_section_description', array(
        'default'           => 'These are just a few projects that I personally enjoy the most. I would be glad to show you a bunch of other projects that I have done so far. Would you like to have a look at them?',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));

    // Add a control for the Project Section description
    $wp_customize->add_control('project_section_description_control', array(
        'label'       => __('Project Section Description', 'wordpress-portfolio-theme'),
        'section'     => 'project_section',
        'settings'    => 'project_section_description',
        'default'  => 'These are just a few projects that I personally enjoy the most. I would be glad to show you a bunch of other projects that I have done so far. Would you like to have a look at them?',
        'type'        => 'textarea',
        'placeholder' => 'Enter your project section description here',
    ));

    // Add a Button in Project Section
    $wp_customize->add_setting( 'project_button_text', array(
        'Default'    => __( 'All projects', 'wordpress-portfolio-theme' ),
        'transport' => 'refresh',
    ));

    // Add a setting for the button text project section
    $wp_customize->add_control( 'project_button_text_control', array(
        'label'    => __( 'Button Text', 'wordpress-portfolio-theme' ),
        'section'  => 'project_section',
        'settings' => 'project_button_text',
        'default'  => 'See more',
        'placeholder' => 'Enter your button text here',
        'type'     => 'text',
    ));

    // Add a button url project section
    $wp_customize->add_setting( 'project_button_url', array(
        'Default'    => __( 'Button Url', 'wordpress-portfolio-theme' ),
        'sanitize_callback' => 'esc_url_raw', // Sanitize the URL
        'transport' => 'refresh',
    )); 

    // Add a setting for the button url project section 
    $wp_customize->add_control( 'project_button_url_control', array(
        'label'    => __( 'Button Url', 'wordpress-portfolio-theme' ),
        'section'  => 'project_section',
        'settings' => 'project_button_url',
        'default'  => '#',
        'placeholder' => 'Enter your button url here',
        'type'     => 'url',
    ));
}




