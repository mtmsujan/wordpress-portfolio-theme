<?php
// Template Name: Home Page
get_header();?>
        <div id="hero" data-scroll-section>
            <?php $hero_section_background_image = get_theme_mod('hero_image');?>
            <div class="hero-wrap jarallax" style="background-image: url('<?php echo esc_url($hero_section_background_image); ?>');">
                <div class="hero-content">
                    <div class="container-fluid">
                        <div class="d-flex justify-content-between" data-scroll data-scroll-speed="0.5">
                            <div class="hero-title fs-140 fw-700 text-white text-uppercase"><?php echo esc_html(get_theme_mod('hero_title'));?></div>
                            <div class="hero-desc text-white d-none d-xl-block">
                                <div class="">
                                    <a href="mailto: <?php echo esc_html(get_theme_mod('hero_email'));?>"
                                        class="hover-animation"><?php echo esc_html(get_theme_mod('hero_email'));?> </a>
                                </div>
                                <div class="">
                                    <a href="tel:<?php echo esc_html(get_theme_mod('hero_phone'));?>" class="hover-animation"><?php echo esc_html(get_theme_mod('hero_phone'));?> </a>
                                </div>
                                <div class="social_list">
                                    <a href="<?php echo esc_html(get_theme_mod('hero_facebook'));?>"
                                        class="hover-animation"><?php echo esc_html(get_theme_mod('hero_facebook_label'));?> </a>
                                </div>
                                <div class="social_list">
                                    <a href="<?php echo esc_html(get_theme_mod('hero_instagram'));?>" class="hover-animation"><?php echo esc_html(get_theme_mod('hero_instagram_label'));?> </a>
                                </div>
                                <div class="social_list">
                                    <a href="<?php echo esc_html(get_theme_mod('hero_telegram'));?>" class="hover-animation"><?php echo esc_html(get_theme_mod('hero_telegram_label'));?> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="hero-marquee"></div>
            </div>
        </div>
        <div class="hero-marquee" style="display: none;">
            <div class="hero-marquee-inner" aria-hidden="true" style="color: #fff">
                <div class="marquee">
                    <?php
                        // Abour page hade line move risht to left
                        $hade_line = get_theme_mod('hero_hade_line');
                        // string to array
                        $hade_line = explode(',', $hade_line);
                        foreach ($hade_line as $key => $value) {
                            echo '<span>'.$value.'</span>';
                        }
                    ?>
                </div>
            </div>
            <script>
                window.addEventListener('DOMContentLoaded', (event) => {
                    appendHtml('#hero-marquee', '.hero-marquee');
                });
            </script>
        </div>
        <div id="about-me">
            <div class="about-me-wrap section-relative bg-white pt-120" data-scroll-section>
                <div class="container-custom mb-120">
                    <p class="about-me__sub-tittle font-tnr font-italic content-animation">What you can expect from me:
                    </p>
                    <div class="about-me__title fs-40 text-reveal mt-20 mb-80 content-animation"><?php echo esc_html(get_theme_mod('expect_section'));?></div>
                    <div id="about-me__all-services" class="content-animation"></div>
                </div>
                <div id="hero-video"></div>
            </div>
        </div>
        <div class="about-me__all-services" style="display: none;">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div data-aos="fade-up" data-aos-duration="1000">
                        <p class="font-tnr font-italic mb-05">All services</p>
                        <ul>
                            <?php 
                            $services = get_theme_mod('service_list');
                            ?>
                            <li class="mb-05">
                                <p><?php echo $services;?></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                    <div class="about-me__desc max-width text-justify-center" data-aos="fade-up"
                        data-aos-duration="1000">
                        <p><?php echo esc_html(get_theme_mod('expert_content'));?></p>
                    </div>
                    <div class="about-me__btn dungbu-btn fs-40 pt-40" data-aos="fade-up" data-aos-duration="1000">
                        <span class="fw-400"><?php echo esc_html(get_theme_mod('expert_button_text'));?></span>
                        <a href="<?php echo esc_url(get_theme_mod('expert_button_url')); ?>">
                            <span class="dungbu-btn__icon ml-30 magnetic" data-strength="50" data-strength-text="50">
                                <div class="btn-fill"></div>
                                <span class="btn-text">
                                    <span class="btn-text-inner change">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.5 4.5V6H16.9425L4.5 18.4425L5.5575 19.5L18 7.0575V16.5H19.5V4.5H7.5Z"
                                                fill="#1A1A1A" />
                                        </svg>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <script>
                window.addEventListener('DOMContentLoaded', (event) => {
                    appendHtml('#about-me__all-services', '.about-me__all-services');
                });
            </script>
        </div>
        <div id="project" class="bg-white">
            <div class="project-wrap section-relative bg-white" data-scroll-section>
                <div class="container-custom pt-120 pb-80">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="project-title title-mb fs-60 fw-700 text-uppercase heading-animation"
                                data-aos="fade-up" data-aos-duration="1000">
                                <div class="head-animation"><?php echo esc_html(get_theme_mod('project_section_title'));?></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                            <div class="project-desc text-justify-center mt-50 content-animation" data-aos="fade-up"
                                data-aos-duration="1000">
                                <p><?php echo esc_html(get_theme_mod('project_section_description'));?></p>
                            </div>
                            <div class="project__btn dungbu-btn pt-40 fs-40 content-animation" data-aos="fade-up"
                                data-aos-duration="1000">
                                <span class="fw-400"> <?php echo esc_html(get_theme_mod('project_button_text'));?></span>
                                <a href="<?php echo esc_url(get_theme_mod('project_button_url')); ?>">
                                    <span class="dungbu-btn__icon ml-30 magnetic" data-strength="50"
                                        data-strength-text="50">
                                        <div class="btn-fill"></div>
                                        <span class="btn-text">
                                            <span class="btn-text-inner change">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.5 4.5V6H16.9425L4.5 18.4425L5.5575 19.5L18 7.0575V16.5H19.5V4.5H7.5Z"
                                                        fill="#1A1A1A" />
                                                </svg>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="project-content">
                    <?php 
                        $args = array(
                            'post_type' => 'project',
                            'posts_per_page' => 6
                        );
                        $query = new WP_Query($args);

                        if($query->have_posts()){
                            while($query->have_posts()){
                                $query->the_post();
                                get_template_part('template/project-content');
                            }
                            wp_reset_postdata();
                        }
                    ?>
                    </div>
                </div>
            </div>
        </div>
        <div id="brand">
            <div class="brand-wrap section-relative pt-120 pb-80" data-scroll-section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 d-none d-xl-block d-xxl-none"></div>
                        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
                            <div class="brand-title title-mb fs-60 fw-700 line-height-60 text-uppercase heading-animation"
                                data-aos="fade-up" data-aos-duration="1000">
                                <div class="head-animation"><?php echo esc_html(get_theme_mod('brand_section_title'));?></div>
                            </div>
                            <div class="brand-desc text-justify-center mt-20 content-animation" data-aos="fade-up"
                                data-aos-duration="1000">
                                <p><?php echo esc_html(get_theme_mod('brand_section_description'));?></p>
                            </div>
                        </div>
                    </div>
                    <div class="brand-slide mt-80">
                        <div class="swiper swiper-brand">
                            <div class="swiper-wrapper">
                                <?php
                                    // Get all brands with featured image
                                    $args = array(
                                        'post_type'      => 'brand',
                                        'posts_per_page' => -1,
                                    );
                                    $brands = new WP_Query($args);

                                    if ($brands->have_posts()) {
                                        while ($brands->have_posts()) {
                                            $brands->the_post();
                                            $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'full'); // Get the featured image URL
                                            ?>
                                            <div class="swiper-slide">
                                                <div class="brand-item">
                                                        <img src="<?php echo esc_url($featured_image); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" />
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        wp_reset_postdata();
                                    }
                                ?> 
                            </div>
                            <div class="swiper-button-next">
                                <svg width="60" height="60" viewBox="0 0 60 60" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.501465" width="59" height="59" rx="29.5" stroke="#1A1A1A" />
                                    <path
                                        d="M31.5 22.5015L30.4275 23.5462L36.1125 29.2515H21V30.7515H36.1125L30.4275 36.4312L31.5 37.5015L39 30.0015L31.5 22.5015Z"
                                        fill="#1A1A1A" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php get_footer(); ?>