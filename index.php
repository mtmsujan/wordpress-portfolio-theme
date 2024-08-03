<?php get_header();?>
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
                    $hade_line = get_theme_mod('hero_hade_line');
                    $hade_line = str_replace(',', ' - ', $hade_line);
                    echo $hade_line;?>
                    <?php // echo esc_html(get_theme_mod('hero_hade_line'));?>
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
                    <div class="about-me__title fs-40 text-reveal mt-20 mb-80 content-animation">
                        I prioritize tidy layouts, clean typography, and meticulous alignment to ensure user-friendly
                        products. With a passion for minimalism, I aim to maximize the impact of brands' messages,
                        stories, and images in each of my designs </div>
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
                            <li class="mb-05">
                                <p>1. Ui design - Website, landing page, mobile app</p>
                            </li>
                            <li class="mb-05">
                                <p>2. Powerpoint presentation and motion graphic video</p>
                            </li>
                            <li class="mb-05">
                                <p>3. Media publications - Company profile, banner, poster, ...</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                    <div class="about-me__desc max-width text-justify-center" data-aos="fade-up"
                        data-aos-duration="1000">
                        <p>With a background in training and designing slides for domestic enterprises for many years, I
                            have a deep understanding of layout presentation, content handling, and working with motion
                            effects. Now, I bring that experience to web design along with my knowledge of front-end
                            programming to create more great websites</p>
                    </div>
                    <div class="about-me__btn dungbu-btn fs-40 pt-40" data-aos="fade-up" data-aos-duration="1000">
                        <span class="fw-400">More about me</span>
                        <a href="#">
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
                                <div class="head-animation">Some of the most impressive projects I have worked </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                            <div class="project-desc text-justify-center mt-50 content-animation" data-aos="fade-up"
                                data-aos-duration="1000">
                                <p>These are just a few projects that I personally enjoy the most. I would be glad to
                                    show you a bunch of other projects that I have done so far. Would you like to have a
                                    look at them?</p>
                            </div>
                            <div class="project__btn dungbu-btn pt-40 fs-40 content-animation" data-aos="fade-up"
                                data-aos-duration="1000">
                                <span class="fw-400"> All projects</span>
                                <a href="#">
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
                        <div class="project-item">
                            <div class="_project-item" data-scroll data-scroll-speed="">
                                <style>
                                    .project-img-wrap__115 {
                                        position: absolute;
                                        right: 0;
                                        top: 8rem;
                                        width: 100%;
                                        height: 100%;
                                        overflow: hidden;
                                        z-index: 0;
                                    }

                                    .project-img-wrap__115 .project-bg {
                                        background: url('<?php echo get_template_directory_uri();?>/assets/img/catalog/aura_club/auraclub-homepage_product_2.png');
                                        background-size: cover;
                                        background-repeat: no-repeat;
                                        background-position: center;
                                        overflow: hidden;
                                        top: -4rem;
                                        z-index: 1;
                                        aspect-ratio: 1;
                                    }

                                    .project-img-wrap__115 .project-img {
                                        position: absolute;
                                        top: -8rem;
                                        right: 0;
                                        background: url('<?php echo get_template_directory_uri();?>/assets/img/catalog/aura_club/auraclub-homepage_background_2.png');
                                        background-size: cover;
                                        background-repeat: no-repeat;
                                        background-position: center;
                                        width: 49%;
                                        height: 100%;
                                        overflow: hidden;
                                    }

                                    @media(max-width: 1200px) {
                                        .project-img-wrap__115 {
                                            position: relative;
                                            top: 0;
                                        }

                                        .project-img-wrap__115 .project-bg {
                                            position: relative;
                                            top: 0;
                                        }
                                    }
                                </style>
                                <div class="container-custom">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-none d-lg-block">
                                            <div class="project-item-wrap">
                                                <div class="project-text content-animation">
                                                    <div class="project-name fw-400 fs-40 mb-20">Aura Club</div>
                                                    <div class="project-description text-justify-center mb-40">
                                                        <p>From the investor's vision of an elite and refined
                                                            residential community, it transcends the value of merely
                                                            being an upscale living space.</p>
                                                    </div>
                                                    <div class="project-sub">
                                                        <ul>
                                                            <li>
                                                                <span
                                                                    class="font-tnr fw-400 text-italic">Category:</span>
                                                                <span>Website</span>
                                                            </li>
                                                            <li>
                                                                <span class="font-tnr fw-400 text-italic">Role:</span>
                                                                <span>Web designer</span>
                                                            </li>
                                                            <li>
                                                                <span class="font-tnr fw-400 text-italic">Tag:</span>
                                                                <span>Business, elegant</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="project__btn dungbu-btn fs-40 content-animation">
                                                    <span class="fw-400">Project details</span>
                                                    <a href="aura-club.html">
                                                        <span class="dungbu-btn__icon ml-30 magnetic" data-strength="50"
                                                            data-strength-text="50">
                                                            <div class="btn-fill"></div>
                                                            <span class="btn-text">
                                                                <span class="btn-text-inner change">
                                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                            <div class="project-img-wrap__115">
                                                <div class="project-bg" data-scroll data-scroll-speed="0.5"></div>
                                                <div class="project-img"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12 d-block d-lg-none">
                                            <div class="project-text">
                                                <div class="project-name fw-400 fs-40 mb-20">Aura Club</div>
                                                <div class="project-description text-justify-center mb-40">
                                                    <p>From the investor's vision of an elite and refined residential
                                                        community, it transcends the value of merely being an upscale
                                                        living space.</p>
                                                </div>
                                                <div class="project-sub">
                                                    <ul>
                                                        <li>
                                                            <span class="font-tnr fw-400 text-italic">Category:</span>
                                                            <span>Website</span>
                                                        </li>
                                                        <li>
                                                            <span class="font-tnr fw-400 text-italic">Role:</span>
                                                            <span>Web designer</span>
                                                        </li>
                                                        <li>
                                                            <span class="font-tnr fw-400 text-italic">Tag:</span>
                                                            <span>Business, elegant</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="project__btn dungbu-btn fs-40">
                                                <span class="fw-400">Project details</span>
                                                <a target="_blank" href="aura-club.html">
                                                    <span class="dungbu-btn__icon ml-30 magnetic" data-strength="50"
                                                        data-strength-text="50">
                                                        <div class="btn-fill"></div>
                                                        <span class="btn-text">
                                                            <span class="btn-text-inner change">
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
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
                            </div>
                        </div>
                        <div class="project-item">
                            <div class="_project-item" data-scroll data-scroll-speed="">
                                <style>
                                    .project-img-wrap__120 {
                                        position: absolute;
                                        right: 0;
                                        top: 8rem;
                                        width: 100%;
                                        height: 100%;
                                        overflow: hidden;
                                        z-index: 0;
                                    }

                                    .project-img-wrap__120 .project-bg {
                                        background: url('<?php echo get_template_directory_uri();?>/assets/img/catalog/nioh/nioh-homepage_product_2.png');
                                        background-size: cover;
                                        background-repeat: no-repeat;
                                        background-position: center;
                                        overflow: hidden;
                                        top: -4rem;
                                        z-index: 1;
                                        aspect-ratio: 1;
                                    }

                                    .project-img-wrap__120 .project-img {
                                        position: absolute;
                                        top: -8rem;
                                        right: 0;
                                        background: url('<?php echo get_template_directory_uri();?>/assets/img/catalog/nioh/nioh-homepage_background_2.png');
                                        background-size: cover;
                                        background-repeat: no-repeat;
                                        background-position: center;
                                        width: 49%;
                                        height: 100%;
                                        overflow: hidden;
                                    }

                                    @media(max-width: 1200px) {
                                        .project-img-wrap__120 {
                                            position: relative;
                                            top: 0;
                                        }

                                        .project-img-wrap__120 .project-bg {
                                            position: relative;
                                            top: 0;
                                        }
                                    }
                                </style>
                                <div class="container-custom">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-none d-lg-block">
                                            <div class="project-item-wrap">
                                                <div class="project-text content-animation">
                                                    <div class="project-name fw-400 fs-40 mb-20">Nioh</div>
                                                    <div class="project-description text-justify-center mb-40">
                                                        <p>Nioh &ndash; A specially designed Figma template crafted for
                                                            both interior and exterior architectural fields. You can use
                                                            it to showcase completed projects, architectural drawings
                                                            you&rsquo;ve designed, and much more.</p>
                                                    </div>
                                                    <div class="project-sub">
                                                        <ul>
                                                            <li>
                                                                <span
                                                                    class="font-tnr fw-400 text-italic">Category:</span>
                                                                <span>Web theme</span>
                                                            </li>
                                                            <li>
                                                                <span class="font-tnr fw-400 text-italic">Role:</span>
                                                                <span>Web designer</span>
                                                            </li>
                                                            <li>
                                                                <span class="font-tnr fw-400 text-italic">Tag:</span>
                                                                <span>Minimal</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="project__btn dungbu-btn fs-40 content-animation">
                                                    <span class="fw-400">Project details</span>
                                                    <a href="nioh.html">
                                                        <span class="dungbu-btn__icon ml-30 magnetic" data-strength="50"
                                                            data-strength-text="50">
                                                            <div class="btn-fill"></div>
                                                            <span class="btn-text">
                                                                <span class="btn-text-inner change">
                                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                            <div class="project-img-wrap__120">
                                                <div class="project-bg" data-scroll data-scroll-speed="0.5"></div>
                                                <div class="project-img"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12 d-block d-lg-none">
                                            <div class="project-text">
                                                <div class="project-name fw-400 fs-40 mb-20">Nioh</div>
                                                <div class="project-description text-justify-center mb-40">
                                                    <p>Nioh &ndash; A specially designed Figma template crafted for both
                                                        interior and exterior architectural fields. You can use it to
                                                        showcase completed projects, architectural drawings you&rsquo;ve
                                                        designed, and much more.</p>
                                                </div>
                                                <div class="project-sub">
                                                    <ul>
                                                        <li>
                                                            <span class="font-tnr fw-400 text-italic">Category:</span>
                                                            <span>Web theme</span>
                                                        </li>
                                                        <li>
                                                            <span class="font-tnr fw-400 text-italic">Role:</span>
                                                            <span>Web designer</span>
                                                        </li>
                                                        <li>
                                                            <span class="font-tnr fw-400 text-italic">Tag:</span>
                                                            <span>Minimal</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="project__btn dungbu-btn fs-40">
                                                <span class="fw-400">Project details</span>
                                                <a target="_blank" href="nioh.html">
                                                    <span class="dungbu-btn__icon ml-30 magnetic" data-strength="50"
                                                        data-strength-text="50">
                                                        <div class="btn-fill"></div>
                                                        <span class="btn-text">
                                                            <span class="btn-text-inner change">
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
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
                            </div>
                        </div>
                        <div class="project-item">
                            <div class="_project-item" data-scroll data-scroll-speed="">
                                <style>
                                    .project-img-wrap__117 {
                                        position: absolute;
                                        right: 0;
                                        top: 8rem;
                                        width: 100%;
                                        height: 100%;
                                        overflow: hidden;
                                        z-index: 0;
                                    }

                                    .project-img-wrap__117 .project-bg {
                                        background: url('<?php echo get_template_directory_uri();?>/assets/img/catalog/bizman_sky/bizman-homepage_product_2.png');
                                        background-size: cover;
                                        background-repeat: no-repeat;
                                        background-position: center;
                                        overflow: hidden;
                                        top: -4rem;
                                        z-index: 1;
                                        aspect-ratio: 1;
                                    }

                                    .project-img-wrap__117 .project-img {
                                        position: absolute;
                                        top: -8rem;
                                        right: 0;
                                        background: url('<?php echo get_template_directory_uri();?>/assets/img/catalog/bizman_sky/bizman-homepage_background_2.png');
                                        background-size: cover;
                                        background-repeat: no-repeat;
                                        background-position: center;
                                        width: 49%;
                                        height: 100%;
                                        overflow: hidden;
                                    }

                                    @media(max-width: 1200px) {
                                        .project-img-wrap__117 {
                                            position: relative;
                                            top: 0;
                                        }

                                        .project-img-wrap__117 .project-bg {
                                            position: relative;
                                            top: 0;
                                        }
                                    }
                                </style>
                                <div class="container-custom">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-none d-lg-block">
                                            <div class="project-item-wrap">
                                                <div class="project-text content-animation">
                                                    <div class="project-name fw-400 fs-40 mb-20">Bizman Sky</div>
                                                    <div class="project-description text-justify-center mb-40">
                                                        <p>A spectacular rooftop restaurant and lounge located in Saigon
                                                            serves a wide range of special coffees, English breakfast,
                                                            brunch, biz-lunch, and relaxed dinners with inspiring
                                                            drinks.</p>
                                                    </div>
                                                    <div class="project-sub">
                                                        <ul>
                                                            <li>
                                                                <span
                                                                    class="font-tnr fw-400 text-italic">Category:</span>
                                                                <span>Website</span>
                                                            </li>
                                                            <li>
                                                                <span class="font-tnr fw-400 text-italic">Role:</span>
                                                                <span>Web designer</span>
                                                            </li>
                                                            <li>
                                                                <span class="font-tnr fw-400 text-italic">Tag:</span>
                                                                <span>Restaurant, elegant</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="project__btn dungbu-btn fs-40 content-animation">
                                                    <span class="fw-400">Project details</span>
                                                    <a href="bizman-sky.html">
                                                        <span class="dungbu-btn__icon ml-30 magnetic" data-strength="50"
                                                            data-strength-text="50">
                                                            <div class="btn-fill"></div>
                                                            <span class="btn-text">
                                                                <span class="btn-text-inner change">
                                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                            <div class="project-img-wrap__117">
                                                <div class="project-bg" data-scroll data-scroll-speed="0.5"></div>
                                                <div class="project-img"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12 d-block d-lg-none">
                                            <div class="project-text">
                                                <div class="project-name fw-400 fs-40 mb-20">Bizman Sky</div>
                                                <div class="project-description text-justify-center mb-40">
                                                    <p>A spectacular rooftop restaurant and lounge located in Saigon
                                                        serves a wide range of special coffees, English breakfast,
                                                        brunch, biz-lunch, and relaxed dinners with inspiring drinks.
                                                    </p>
                                                </div>
                                                <div class="project-sub">
                                                    <ul>
                                                        <li>
                                                            <span class="font-tnr fw-400 text-italic">Category:</span>
                                                            <span>Website</span>
                                                        </li>
                                                        <li>
                                                            <span class="font-tnr fw-400 text-italic">Role:</span>
                                                            <span>Web designer</span>
                                                        </li>
                                                        <li>
                                                            <span class="font-tnr fw-400 text-italic">Tag:</span>
                                                            <span>Restaurant, elegant</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="project__btn dungbu-btn fs-40">
                                                <span class="fw-400">Project details</span>
                                                <a target="_blank" href="bizman-sky.html">
                                                    <span class="dungbu-btn__icon ml-30 magnetic" data-strength="50"
                                                        data-strength-text="50">
                                                        <div class="btn-fill"></div>
                                                        <span class="btn-text">
                                                            <span class="btn-text-inner change">
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
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
                            </div>
                        </div>
                        <div class="project-item">
                            <div class="_project-item" data-scroll data-scroll-speed="">
                                <style>
                                    .project-img-wrap__112 {
                                        position: absolute;
                                        right: 0;
                                        top: 8rem;
                                        width: 100%;
                                        height: 100%;
                                        overflow: hidden;
                                        z-index: 0;
                                    }

                                    .project-img-wrap__112 .project-bg {
                                        background: url('<?php echo get_template_directory_uri();?>/assets/img/catalog/timind/timind-homepage_product_3.png');
                                        background-size: cover;
                                        background-repeat: no-repeat;
                                        background-position: center;
                                        overflow: hidden;
                                        top: -4rem;
                                        z-index: 1;
                                        aspect-ratio: 1;
                                    }

                                    .project-img-wrap__112 .project-img {
                                        position: absolute;
                                        top: -8rem;
                                        right: 0;
                                        background: url('<?php echo get_template_directory_uri();?>/assets/img/catalog/timind/timind-homepage_background_3.png');
                                        background-size: cover;
                                        background-repeat: no-repeat;
                                        background-position: center;
                                        width: 49%;
                                        height: 100%;
                                        overflow: hidden;
                                    }

                                    @media(max-width: 1200px) {
                                        .project-img-wrap__112 {
                                            position: relative;
                                            top: 0;
                                        }

                                        .project-img-wrap__112 .project-bg {
                                            position: relative;
                                            top: 0;
                                        }
                                    }
                                </style>
                                <div class="container-custom">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-none d-lg-block">
                                            <div class="project-item-wrap">
                                                <div class="project-text content-animation">
                                                    <div class="project-name fw-400 fs-40 mb-20">Timind</div>
                                                    <div class="project-description text-justify-center mb-40">
                                                        <p>With the motto "customer is centricity", Timind has been and
                                                            will continue to serve their customers through their global
                                                            businesses on the premise of developing differentiated
                                                            values.</p>
                                                    </div>
                                                    <div class="project-sub">
                                                        <ul>
                                                            <li>
                                                                <span
                                                                    class="font-tnr fw-400 text-italic">Category:</span>
                                                                <span>Website</span>
                                                            </li>
                                                            <li>
                                                                <span class="font-tnr fw-400 text-italic">Role:</span>
                                                                <span>Web designer</span>
                                                            </li>
                                                            <li>
                                                                <span class="font-tnr fw-400 text-italic">Tag:</span>
                                                                <span>Business, minimal</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="project__btn dungbu-btn fs-40 content-animation">
                                                    <span class="fw-400">Project details</span>
                                                    <a href="timind.html">
                                                        <span class="dungbu-btn__icon ml-30 magnetic" data-strength="50"
                                                            data-strength-text="50">
                                                            <div class="btn-fill"></div>
                                                            <span class="btn-text">
                                                                <span class="btn-text-inner change">
                                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                            <div class="project-img-wrap__112">
                                                <div class="project-bg" data-scroll data-scroll-speed="0.5"></div>
                                                <div class="project-img"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12 d-block d-lg-none">
                                            <div class="project-text">
                                                <div class="project-name fw-400 fs-40 mb-20">Timind</div>
                                                <div class="project-description text-justify-center mb-40">
                                                    <p>With the motto "customer is centricity", Timind has been and will
                                                        continue to serve their customers through their global
                                                        businesses on the premise of developing differentiated values.
                                                    </p>
                                                </div>
                                                <div class="project-sub">
                                                    <ul>
                                                        <li>
                                                            <span class="font-tnr fw-400 text-italic">Category:</span>
                                                            <span>Website</span>
                                                        </li>
                                                        <li>
                                                            <span class="font-tnr fw-400 text-italic">Role:</span>
                                                            <span>Web designer</span>
                                                        </li>
                                                        <li>
                                                            <span class="font-tnr fw-400 text-italic">Tag:</span>
                                                            <span>Business, minimal</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="project__btn dungbu-btn fs-40">
                                                <span class="fw-400">Project details</span>
                                                <a target="_blank" href="timind.html">
                                                    <span class="dungbu-btn__icon ml-30 magnetic" data-strength="50"
                                                        data-strength-text="50">
                                                        <div class="btn-fill"></div>
                                                        <span class="btn-text">
                                                            <span class="btn-text-inner change">
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
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
                            </div>
                        </div>
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
                                <div class="head-animation">Brands i have worked with</div>
                            </div>
                            <div class="brand-desc text-justify-center mt-20 content-animation" data-aos="fade-up"
                                data-aos-duration="1000">
                                <p>My experience working alongside major brands has significantly enhanced my skillset.
                                    Through these collaborations, I have gained a wealth of knowledge and insights,
                                    allowing me to consistently refine my expertise.</p>
                            </div>
                        </div>
                    </div>
                    <div class="brand-slide mt-80">
                        <div class="swiper swiper-brand">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/cache/catalog/4-brands/logo-arteco-400x300.png"
                                                alt="Artéco"></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/cache/catalog/4-brands/logo-aura-400x300.png"
                                                alt="Aura Club"></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <a href="#"><img
                                                src="<?php echo get_template_directory_uri();?>/assets/img/cache/catalog/4-brands/logo-apec-schools-400x300.png"
                                                alt="APEC Schools"></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/cache/catalog/4-brands/logo-aop-400x300.png"
                                                alt="Action on Poverty"></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/cache/catalog/4-brands/logo-bepage-400x300.png"
                                                alt="Bepage"></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/cache/catalog/4-brands/logo-bizman-sky-400x300.png"
                                                alt="Bizman Sky"></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/cache/catalog/4-brands/logo-customchic-400x300.png"
                                                alt="Customchic"></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/cache/catalog/4-brands/logo-dewoo-400x300.png"
                                                alt="Dewoo Group"></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <a href="#"><img
                                                src="<?php echo get_template_directory_uri();?>/assets/img/cache/catalog/4-brands/logo-daiphong-jsc-400x300.png"
                                                alt="Dai Phong JSC"></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/cache/catalog/4-brands/logo-fta-eampc-400x300.png"
                                                alt="FTA E&amp;C"></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <a href="#"><img
                                                src="<?php echo get_template_directory_uri();?>/assets/img/cache/catalog/4-brands/logo-first-alliances-400x300.png"
                                                alt="First Alliances"></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <a href="#"><img
                                                src="<?php echo get_template_directory_uri();?>/assets/img/cache/catalog/4-brands/logo-growell-vietnam-400x300.png"
                                                alt="Growell Vietnam"></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/cache/catalog/4-brands/logo-inet-400x300.png"
                                                alt="Inet"></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/cache/catalog/4-brands/logo-isu-400x300.png"
                                                alt="ISU"></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <a href="#"><img
                                                src="<?php echo get_template_directory_uri();?>/assets/img/cache/catalog/4-brands/logo-ite-hcmc-2019-400x300.png"
                                                alt="ITE HCMC 2019"></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <a href="#"><img
                                                src="<?php echo get_template_directory_uri();?>/assets/img/cache/catalog/4-brands/logo-iec-winter-wolf-400x300.png"
                                                alt="IEC Winter wolf"></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/cache/catalog/4-brands/logo-kd-tech-400x300.png"
                                                alt="KD Tech"></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <a href="#"><img
                                                src="<?php echo get_template_directory_uri();?>/assets/img/cache/catalog/4-brands/logo-lam-dong-2-hospital-400x300.png"
                                                alt="Lam Dong II Hospital"></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/cache/catalog/4-brands/logo-mibs-400x300.png"
                                                alt="MIBS"></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <a href="#"><img
                                                src="<?php echo get_template_directory_uri();?>/assets/img/cache/catalog/4-brands/logo-melinh-plaza-400x300.png"
                                                alt="Me Linh Plaza"></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <a href="#"><img
                                                src="<?php echo get_template_directory_uri();?>/assets/img/cache/catalog/4-brands/logo-mampa-vietnam-400x300.png"
                                                alt="M&amp;A Vietnam"></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/cache/catalog/4-brands/logo-netco-post-400x300.png"
                                                alt="Netco Post"></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <a href="#"><img
                                                src="<?php echo get_template_directory_uri();?>/assets/img/cache/catalog/4-brands/logo-ngoc-viet-entertainment-400x300.png"
                                                alt="Ngoc Viet Entertainment"></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <a href="#"><img
                                                src="<?php echo get_template_directory_uri();?>/assets/img/cache/catalog/4-brands/logo-nguyen-sang-service-400x300.png"
                                                alt="Nguyen Sang Service Co.,LTD"></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/cache/catalog/4-brands/logo-phoenix-mf-400x300.png"
                                                alt="Phoenix MF Co.,LTD"></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <a href="#"><img
                                                src="<?php echo get_template_directory_uri();?>/assets/img/cache/catalog/4-brands/logo-phan-dinh-phung-high-school-400x300.png"
                                                alt="Phan Dinh Phung High school"></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/cache/catalog/4-brands/logo-savvycom-400x300.png"
                                                alt="Savvycom"></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/cache/catalog/4-brands/logo-timind-400x300.png"
                                                alt="Timind"></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/cache/catalog/4-brands/logo-techcombank-400x300.png"
                                                alt="Techcombank"></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/cache/catalog/4-brands/logo-techmaster-400x300.png"
                                                alt="Techmaster"></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <a href="#"><img
                                                src="<?php echo get_template_directory_uri();?>/assets/img/cache/catalog/4-brands/logo-thien-vu-audio-400x300.png"
                                                alt="Thien Vu Audio"></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/cache/catalog/4-brands/logo-tinhvan-400x300.png"
                                                alt="Tinh Van Group"></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/cache/catalog/4-brands/logo-utt-400x300.png"
                                                alt="UTT"></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/cache/catalog/4-brands/logo-viettinbank-400x300.png"
                                                alt="Viettinbank"></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <a href="#"><img
                                                src="<?php echo get_template_directory_uri();?>/assets/img/cache/catalog/4-brands/logo-vas-track-2019-400x300.png"
                                                alt="VAS Track 2019"></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <a href="#"><img
                                                src="<?php echo get_template_directory_uri();?>/assets/img/cache/catalog/4-brands/logo-vincom-royal-park-400x300.png"
                                                alt="Vincom Royal Park"></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/cache/catalog/4-brands/logo-zozo-400x300.png"
                                                alt="Zozo"></a>
                                    </div>
                                </div>
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
        <div id="touch" class="bg-white" data-scroll-section>
            <div class="touch-wrap pt-120 pb-120">
                <div class="container-custom">
                    <p class="touch__sub-tittle font-italic fw-400 mb-20 content-animation">That's all for now</p>
                    <div class="touch__title fs-40 fw-400 text-reveal content-animation">
                        <p>Got a project in mind?</p>
                        <p>Let&rsquo;s talk</p>
                    </div>
                    <div class="line mt-80 mb-80"></div>

                    <div class="touch-contact content-animation">
                        <ul>
                            <li>
                                <p class="text-grey">Email address:</p>
                                <p><a href="mailto: Nguyenmanhdung1996@gmail.com">nguyenmanhdung1996@gmail.com</a></p>
                            </li>
                            <li>
                                <p class="text-grey">Phone number:</p>
                                <p><a href="tel: +84346189173">(+84) 346 189 173</a></p>
                            </li>
                            <li id="social"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="social" style="display: none">
            <span class="text-grey">Social:</span>
            <ul>
                <li><a target="_blank" class="hover-animation"
                        href="https://www.facebook.com/NguyenManhDung1996/">Facebook</a></li>
                <li><a target="_blank" class="hover-animation" href="https://www.instagram.com/dungbubu/">Instagram</a>
                </li>
                <li><a target="_blank" class="hover-animation" href="https://t.me/dungbubu">Telegram</a></li>
            </ul>
            <script>
                window.addEventListener('DOMContentLoaded', (event) => {
                    appendHtml('#social', '.social');
                });
            </script>
        </div>

        <?php get_footer(); ?>