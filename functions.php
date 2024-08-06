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

// Add the meta box to the project post type
add_action( 'add_meta_boxes', 'add_project_metaboxes' );

// Function to add the metabox
function add_project_metaboxes() {
    add_meta_box(
        'project_details',
        'Project Details',
        'project_details_callback',
        'project', // Custom post type
        'normal',
        'high'
    );
}

// Metabox callback function
function project_details_callback( $post ) {
    wp_nonce_field( 'save_project_details', 'project_details_nonce' );

    $project_description = get_post_meta( $post->ID, '_project_description', true );
    $project_url = get_post_meta( $post->ID, '_project_url', true );
    $project_gallery = get_post_meta( $post->ID, '_project_gallery', true );

    ?>
    <div class="project-details">
        <div class="field-group">
            <label for="project_description">Description</label>
            <textarea id="project_description" name="project_description" rows="4" cols="50"><?php echo esc_textarea( $project_description ); ?></textarea>
        </div>
        <div class="field-group">
            <label for="project_url">Project URL</label>
            <input type="url" id="project_url" name="project_url" value="<?php echo esc_attr( $project_url ); ?>" size="25" />
        </div>
        <div class="field-group">
            <label for="project_gallery">Image Gallery</label>
            <input type="hidden" id="project_gallery" name="project_gallery" value="<?php echo esc_attr( $project_gallery ); ?>" />
            <button type="button" class="button button-secondary" id="upload_image_button">Upload Images</button>
            <div id="image_preview">
                <?php 
                if ( !empty( $project_gallery ) ) : 
                    $gallery_images = maybe_unserialize( $project_gallery );
                    if ( is_array( $gallery_images ) ) {
                        foreach ( $gallery_images as $image_url ) {
                            echo '<div class="gallery-item"><img src="' . esc_url( $image_url ) . '" style="max-width: 100px; height: auto;" /><button type="button" class="remove-image-button"><i class="fa fa-close"></i></button></div>';
                        }
                    }
                endif; 
                ?>
            </div>
        </div>
    </div>
    <?php
}

// Save the metabox data
add_action( 'save_post', 'save_project_details' );
function save_project_details( $post_id ) {
    if ( !isset( $_POST['project_details_nonce'] ) || !wp_verify_nonce( $_POST['project_details_nonce'], 'save_project_details' ) ) {
        return;
    }

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    if ( isset( $_POST['post_type'] ) && 'projects' === $_POST['post_type'] ) {
        if ( !current_user_can( 'edit_page', $post_id ) ) {
            return;
        }
    } else {
        if ( !current_user_can( 'edit_post', $post_id ) ) {
            return;
        }
    }

    if ( isset( $_POST['project_description'] ) ) {
        update_post_meta( $post_id, '_project_description', sanitize_textarea_field( $_POST['project_description'] ) );
    }

    if ( isset( $_POST['project_url'] ) ) {
        update_post_meta( $post_id, '_project_url', esc_url_raw( $_POST['project_url'] ) );
    }

    if ( isset( $_POST['project_gallery'] ) ) {
        $gallery_images = array_filter( array_map( 'esc_url_raw', explode( ',', $_POST['project_gallery'] ) ) );
        if ( !empty( $gallery_images ) ) {
            update_post_meta( $post_id, '_project_gallery', maybe_serialize( $gallery_images ) );
        } else {
            delete_post_meta( $post_id, '_project_gallery' );
        }
    }
}


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

    // Brand Section
    $wp_customize->add_section('brand_section', array(
        'title'    => __('Brand Section', 'wordpress-portfolio-theme'),
        'priority' => 190,
    ));

    // Add a setting for the Brand image section title
    $wp_customize->add_setting('brand_section_title', array(
        'default'           => 'Brands i have worked with',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));

    // Add a control for the Brand image section title
    $wp_customize->add_control('brand_section_title_control', array(
        'label'       => __('Brand Section Title', 'wordpress-portfolio-theme'),
        'section'     => 'brand_section',
        'settings'    => 'brand_section_title',
        'type'        => 'text',
        'placeholder' => 'Enter your brand section title here',
    ));

    // Add a setting for the Brand image section description
    $wp_customize->add_setting('brand_section_description', array(
        'default'           => 'My experience working alongside major brands has significantly enhanced my skillset. Through these collaborations, I have gained a wealth of knowledge and insights, allowing me to consistently refine my expertise.',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));

    // Add a control for the Brand image section description
    $wp_customize->add_control('brand_section_description_control', array(  
        'label'       => __('Brand Section Description', 'wordpress-portfolio-theme'),
        'section'     => 'brand_section',
        'settings'    => 'brand_section_description',
        'default'     => 'My experience working alongside major brands has significantly enhanced my skillset. Through these collaborations, I have gained a wealth of knowledge and insights, allowing me to consistently refine my expertise.',
        'type'        => 'textarea',
        'placeholder' => 'Enter your brand section description here',
    ));

    // Footer section
    $wp_customize->add_section('footer_section', array(
        'title'    => __('Footer Section', 'wordpress-portfolio-theme'),
        'priority' => 200,
    ));

    // Add a setting for the footer section title
    $wp_customize->add_setting('footer_section_title', array(
        'default'           => 'Got a project in mind? Let’s talk',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));

    // Add a control for the footer section title  
    $wp_customize->add_control('footer_section_title_control', array(
        'label'       => __('Footer Section Title', 'wordpress-portfolio-theme'),
        'section'     => 'footer_section',
        'settings'    => 'footer_section_title',
        'type'        => 'text',
        'placeholder' => 'Enter your footer section title here',
    ));

    // default footer logo
    $default_image_url = get_template_directory_uri() . '/assets/img/logo_footer.png';
    // add footer logo
    $wp_customize->add_setting('footer_logo', array(
        'default'           => $default_image_url,
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));

    // add footer logo control
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_logo_control', array(
        'label'    => __('Footer Logo', 'wordpress-portfolio-theme'),
        'section'  => 'footer_section',
        'settings' => 'footer_logo',
        'type'     => 'image',
        'priority' => 10,
    )));

    // About Page Customizer options

    // About section
    $wp_customize->add_section('about_section', array(
        'title'    => __('About Section', 'wordpress-portfolio-theme'),
        'priority' => 210,
    ));

    // Add a setting for the About section title
    $wp_customize->add_setting('about_section_title', array(
        'default'           =>"Hello, I'm Manh Dung Nguyen from Hanoi, Vietnam.",
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));

    // Add a control for the About section title
    $wp_customize->add_control('about_section_title_control', array(
        'label'       => __('About Section Title', 'wordpress-portfolio-theme'),
        'section'     => 'about_section',
        'settings'    => 'about_section_title',
        'type'        => 'text',
        'placeholder' => 'Enter your about section title here',
    ));

    // Add a setting for the About section description
    $wp_customize->add_setting('about_section_description', array(
        'default'     => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    // Add a control for the About section description
    $wp_customize->add_control('about_section_description', array(
        'label'       => __('About Section Description', 'wordpress-portfolio-theme'),
        'section'     => 'about_section',
        'settings'    => 'about_section_description',
        'type'        => 'textarea',
        'placeholder' => 'Enter your about section description here',
    ));

   
}




