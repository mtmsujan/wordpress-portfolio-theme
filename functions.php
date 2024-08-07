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
   wp_enqueue_script('project-filter', get_template_directory_uri() . '/assets/js/project-filter.js', array('jquery'), null, true);

   // Enqueue additional script
   wp_enqueue_script('product-option-js', get_template_directory_uri() . '/catalog/view/theme/default/javascript/product_option.js', array(), null, true);

    // Enqueue the theme's main stylesheet
    wp_enqueue_style('wordpress-portfolio-theme-style', get_stylesheet_uri());
}

// Hook into the 'wp_enqueue_scripts' action
add_action('wp_enqueue_scripts', 'wordpress_portfolio_theme_scripts');

// Enqueue custom styles and scripts
add_action( 'admin_enqueue_scripts', 'enqueue_custom_admin_styles_scripts' );
function enqueue_custom_admin_styles_scripts() {
    wp_enqueue_style( 'custom-admin-styles', get_template_directory_uri() . '/assets/css/custom-admin.css' );
    // fontawesome
    wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css' );
    wp_enqueue_media();
    wp_enqueue_script( 'custom-admin-scripts', get_template_directory_uri() . '/assets/js/custom-admin.js', array( 'jquery' ), null, true );
}

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

// Register custom taxonomies for Project
function register_project_taxonomies() {
    // Register Category taxonomy in Project
    $labels = array(
        'name'              => _x( 'Project Categories', 'taxonomy general name', 'wordpress-portfolio-theme' ),
        'singular_name'     => _x( 'Project Category', 'taxonomy singular name', 'wordpress-portfolio-theme' ),
        'search_items'      => __( 'Search Project Categories', 'wordpress-portfolio-theme' ),
        'all_items'         => __( 'All Project Categories', 'wordpress-portfolio-theme' ),
        'parent_item'       => __( 'Parent Project Category', 'wordpress-portfolio-theme' ),
        'parent_item_colon' => __( 'Parent Project Category:', 'wordpress-portfolio-theme' ),
        'edit_item'         => __( 'Edit Project Category', 'wordpress-portfolio-theme' ),
        'update_item'       => __( 'Update Project Category', 'wordpress-portfolio-theme' ),
        'add_new_item'      => __( 'Add New Project Category', 'wordpress-portfolio-theme' ),
        'new_item_name'     => __( 'New Project Category Name', 'wordpress-portfolio-theme' ),
        'menu_name'         => __( 'Project Categories', 'wordpress-portfolio-theme' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'project-category' ),
    );

    register_taxonomy( 'project_category', array( 'project' ), $args );

    // Register Tag taxonomy in Project
    $labels = array(
        'name'                       => _x( 'Project Tags', 'taxonomy general name', 'wordpress-portfolio-theme' ),
        'singular_name'              => _x( 'Project Tag', 'taxonomy singular name', 'wordpress-portfolio-theme' ),
        'search_items'               => __( 'Search Project Tags', 'wordpress-portfolio-theme' ),
        'popular_items'              => __( 'Popular Project Tags', 'wordpress-portfolio-theme' ),
        'all_items'                  => __( 'All Project Tags', 'wordpress-portfolio-theme' ),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Edit Project Tag', 'wordpress-portfolio-theme' ),
        'update_item'                => __( 'Update Project Tag', 'wordpress-portfolio-theme' ),
        'add_new_item'               => __( 'Add New Project Tag', 'wordpress-portfolio-theme' ),
        'new_item_name'              => __( 'New Project Tag Name', 'wordpress-portfolio-theme' ),
        'separate_items_with_commas' => __( 'Separate project tags with commas', 'wordpress-portfolio-theme' ),
        'add_or_remove_items'        => __( 'Add or remove project tags', 'wordpress-portfolio-theme' ),
        'choose_from_most_used'      => __( 'Choose from the most used project tags', 'wordpress-portfolio-theme' ),
        'not_found'                  => __( 'No project tags found.', 'wordpress-portfolio-theme' ),
        'menu_name'                  => __( 'Project Tags', 'wordpress-portfolio-theme' ),
    );

    $args = array(
        'hierarchical'          => false,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var'             => true,
        'rewrite'               => array( 'slug' => 'project-tag' ),
    );

    register_taxonomy( 'project_tag', 'project', $args );

    // Register Role taxonomy in Project
    $labels = array(
        'name'              => _x( 'Project Roles', 'taxonomy general name', 'wordpress-portfolio-theme' ),
        'singular_name'     => _x( 'Project Role', 'taxonomy singular name', 'wordpress-portfolio-theme' ),
        'search_items'      => __( 'Search Project Roles', 'wordpress-portfolio-theme' ),
        'all_items'         => __( 'All Project Roles', 'wordpress-portfolio-theme' ),
        'parent_item'       => __( 'Parent Project Role', 'wordpress-portfolio-theme' ),
        'parent_item_colon' => __( 'Parent Project Role:', 'wordpress-portfolio-theme' ),
        'edit_item'         => __( 'Edit Project Role', 'wordpress-portfolio-theme' ),
        'update_item'       => __( 'Update Project Role', 'wordpress-portfolio-theme' ),
        'add_new_item'      => __( 'Add New Project Role', 'wordpress-portfolio-theme' ),
        'new_item_name'     => __( 'New Project Role Name', 'wordpress-portfolio-theme' ),
        'menu_name'         => __( 'Project Roles', 'wordpress-portfolio-theme' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'project-role' ),
    );

    register_taxonomy( 'project_role', 'project', $args );
}
add_action( 'init', 'register_project_taxonomies' );

// Register Brands Custom post type
function create_brands_gallery_post_type() {
    $labels = array(
        'name'                  => _x('Brands', 'Post Type General Name', 'text_domain'),
        'singular_name'         => _x('Brand', 'Post Type Singular Name', 'text_domain'),
        'menu_name'             => __('Brands', 'text_domain'),
        'name_admin_bar'        => __('Brand', 'text_domain'),
        'archives'              => __('Brand Archives', 'text_domain'),
        'attributes'            => __('Brand Attributes', 'text_domain'),
        'parent_item_colon'     => __('Parent Brand:', 'text_domain'),
        'all_items'             => __('All Brands', 'text_domain'),
        'add_new_item'          => __('Add New Brand', 'text_domain'),
        'add_new'               => __('Add New', 'text_domain'),
        'new_item'              => __('New Brand', 'text_domain'),
        'edit_item'             => __('Edit Brand', 'text_domain'),
        'update_item'           => __('Update Brand', 'text_domain'),
        'view_item'             => __('View Brand', 'text_domain'),
        'view_items'            => __('View Brands', 'text_domain'),
        'search_items'          => __('Search Brand', 'text_domain'),
        'not_found'             => __('Not found', 'text_domain'),
        'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
        'featured_image'        => __('Featured Image', 'text_domain'),
        'set_featured_image'    => __('Set featured image', 'text_domain'),
        'remove_featured_image' => __('Remove featured image', 'text_domain'),
        'use_featured_image'    => __('Use as featured image', 'text_domain'),
        'insert_into_item'      => __('Insert into brand', 'text_domain'),
        'uploaded_to_this_item' => __('Uploaded to this brand', 'text_domain'),
        'items_list'            => __('Brands list', 'text_domain'),
        'items_list_navigation' => __('Brands list navigation', 'text_domain'),
        'filter_items_list'     => __('Filter brands list', 'text_domain'),
    );
    $args = array(
        'label'                 => __('Brand', 'text_domain'),
        'description'           => __('Brands Gallery', 'text_domain'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'revisions'),
        'taxonomies'            => array('category', 'post_tag'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
        'menu_icon'             => 'dashicons-format-gallery',
    );
    register_post_type('brand', $args);
}
add_action('init', 'create_brands_gallery_post_type', 0);

// Custom Walker
class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item));

        $output .= '<a class="hover-animation" href="' . esc_attr($item->url) . '">' . apply_filters('the_title', $item->title, $item->ID) . '</a>';
    }
}

// Require the customizer file
require get_template_directory() .'/customizer.php';

// Require the custom matabox file
require get_template_directory() .'/custom-metabox.php';




