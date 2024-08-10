<?php 
/**
 * Add customizer support
 */

// Add the theme's customize support
add_action( 'customize_register', 'my_theme_customize_register' );

function my_theme_customize_register( $wp_customize ) {
    // Add a section for the freelance availability message
    $wp_customize->add_section( 'freelance_availability_section', array(
        'title'    => __( 'Header Status', 'wordpress-portfolio-theme' ),
        'priority' => 160,
    ) );

    // Add a setting for the freelance availability message
    $wp_customize->add_setting( 'freelance_availability_message', array(
        'default'   => __( 'Available for freelance projects from 18th July', 'wordpress-portfolio-theme' ),
        'transport' => 'refresh',
    ) );

    // Add a control for the freelance availability message
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'freelance_availability_message_control', array(
        'label'    => __( 'Header Status', 'wordpress-portfolio-theme' ),
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

    // Add a setting for the Project page sub title
    $wp_customize->add_setting('project_page_sub_title', array(
        'default'           => 'Some of the most impressive projects I have worked',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));

    // Add a control for the Project page sub title
    $wp_customize->add_control('project_page_sub_title_control', array(
        'label'       => __('Project Page Sub Title', 'wordpress-portfolio-theme'),
        'section'     => 'project_section',
        'settings'    => 'project_page_sub_title',
        'type'        => 'text',
        'placeholder' => 'Enter your project page sub title here',
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

    // About section sub title
    $wp_customize->add_setting('about_section_sub_title', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));

    // Add a control for the About section sub title
    $wp_customize->add_control('about_section_sub_title_control', array(
        'label'       => __('About Section Sub Title', 'wordpress-portfolio-theme'),
        'section'     => 'about_section',
        'settings'    => 'about_section_sub_title',
        'type'        => 'text',
        'placeholder' => 'Enter your about section sub title here',
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

    // Add a setting for the About section image
    $wp_customize->add_setting('about_section_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    // Add a control for the About section image
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_section_image_control', array(
        'label'       => __('About Section Image', 'wordpress-portfolio-theme'),
        'section'     => 'about_section',
        'settings'    => 'about_section_image',
        'type'        => 'image',
        'priority'    => 10,
    )));

    // Add Experience section title
    $wp_customize->add_setting('experience_section_title', array(
        'default'           => 'Experience',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    // Add Experience section title control
    $wp_customize->add_control('experience_section_title_control', array(
        'label'       => __('Experience Section Title', 'wordpress-portfolio-theme'),
        'section'     => 'about_section',
        'settings'    => 'experience_section_title',
        'type'        => 'text',
        'placeholder' => 'Enter your experience section title here',
    ));

    // Add Experience repeatable field
    $wp_customize->add_setting('experience_section_repeatable', array(
        'default'           => '',
        'sanitize_callback' => 'wp_kses_post',
        'transport'         => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Repeatable_Text_Control($wp_customize, 'experience_section_repeatable', array(
        'label'       => __('Add Experience Title and Description', 'wordpress-portfolio-theme'),
        'section'     => 'about_section',
        'settings'    => 'experience_section_repeatable',
    )));

    // add Clients section title
    $wp_customize->add_setting('clients_section_title', array(
        'default'           => 'Clients',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));

    // add Clients section title control
    $wp_customize->add_control('clients_section_title_control', array(
        'label'       => __('Clients Section Title', 'wordpress-portfolio-theme'),
        'section'     => 'about_section',
        'settings'    => 'clients_section_title',
        'type'        => 'text',
        'placeholder' => 'Enter your clients section title here',
    ));

    // Add Clients repeatable field
    $wp_customize->add_setting('add_clients_list', array(
        'default'           => '',
        'sanitize_callback' => 'wp_kses_post',
        'transport'         => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Repeatable_Control($wp_customize, 'add_clients_list', array(
        'label'       => __('Add Clients List', 'wordpress-portfolio-theme'),
        'section'     => 'about_section',
        'settings'    => 'add_clients_list',
    )));

    

}

if (class_exists('WP_Customize_Control')) {
    class WP_Customize_Repeatable_Control extends WP_Customize_Control {
        public $type = 'repeatable';

        public function enqueue() {
            wp_enqueue_script('repeatable-control-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), null, true);
            wp_enqueue_style('repeatable-control-css', get_template_directory_uri() . '/assets/css/custom-admin.css', null, null);
        }

        public function render_content() {
            ?>
            <label>
                <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
                <ul class="repeatable-list">
                    <?php
                    $values = $this->value();
                    $values = !empty($values) ? json_decode($values, true) : [];
                    foreach ($values as $value) {
                        ?>
                        <li class="repeatable-item clients-list-input">
                            <input type="text" value="<?php echo esc_attr($value); ?>" class="repeatable-input" />
                            <button type="button" class="button remove-repeatable"><?php _e('Remove', 'wordpress-portfolio-theme'); ?></button>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
                <button type="button" class="button add-repeatable"><?php _e('Add New Client', 'wordpress-portfolio-theme'); ?></button>
                <input type="hidden" <?php $this->link(); ?> value="<?php echo esc_attr($this->value()); ?>" class="repeatable-value" />
            </label>
            <?php
        }
    }

    class WP_Customize_Repeatable_Text_Control extends WP_Customize_Control {
        public $type = 'repeatable_text';

        public function enqueue() {
            wp_enqueue_script('repeatable-control-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), null, true);
            wp_enqueue_style('repeatable-control-css', get_template_directory_uri() . '/assets/css/custom-admin.css', null, null);
        }

        public function render_content() {
            ?>
            <label>
                <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
                <ul class="repeatable-list">
                    <?php
                    $values = $this->value();
                    $values = !empty($values) ? json_decode($values, true) : [];
                    foreach ($values as $value) {
                        ?>
                        <li class="repeatable-item">
                            <input type="text" value="<?php echo esc_attr($value['title']); ?>" class="repeatable-input-title" placeholder="Title" />
                            <textarea class="repeatable-textarea" placeholder="Description"><?php echo esc_textarea($value['description']); ?></textarea>
                            <button type="button" class="button remove-repeatable"><?php _e('Remove', 'wordpress-portfolio-theme'); ?></button>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
                <button type="button" class="button add-repeatable"><?php _e('Add New Experience', 'wordpress-portfolio-theme'); ?></button>
                <input type="hidden" <?php $this->link(); ?> value="<?php echo esc_attr($this->value()); ?>" class="repeatable-value" />
            </label>
            <?php
        }
    }
}




?>