<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset');?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="theme-color" content="#FFFFFF" />
    <base />
    <meta name="description"
        content="Hi! I'm Dungbubu - a Freelance Digital Designer from Vietnam. Welcome to my Portfolio, where you can find a collection of my projects including Website design, Landing pages, PowerPoint presentations, and more. I hope you have an enjoyable experience" />
    <meta property="og:url" content="common/home.html" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="DungBu · Portfolio" />
    <meta property="og:description"
        content="Hi! I'm Dungbubu - a Freelance Digital Designer from Vietnam. Welcome to my Portfolio, where you can find a collection of my projects including Website design, Landing pages, PowerPoint presentations, and more. I hope you have an enjoyable experience" />
    <meta property="image:alt" content="DungBu · Portfolio" />
    <meta property="og:image" content="<?php echo get_template_directory_uri();?>/assets/img/catalog/8_social/Facebook_sharing_thumbnail_1200x630_4.png" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description"
        content="Hi! I'm Dungbubu - a Freelance Digital Designer from Vietnam. Welcome to my Portfolio, where you can find a collection of my projects including Website design, Landing pages, PowerPoint presentations, and more. I hope you have an enjoyable experience" />
    <meta name="twitter:title" content="DungBu · Portfolio" />
    <meta name="twitter:image" content="<?php echo get_template_directory_uri();?>/assets/img/catalog/8_social/Facebook_sharing_thumbnail_1200x630_4.png" />
    <meta name="robots" content="index, follow, noodp, noydir" />

    <!-- <link rel="icon" href="<?php //echo get_template_directory_uri();?>/assets/img/catalog/2_logo/favicon.png" /> -->

    <script type="application/ld+json">
        {
           "@context": "https://schema.org",
           "@graph": [
              {
                 "@type": "Organization",
                 "@id": "https://dungbubu.com/common/home#organization",
                 "name": "DungBu · Portfolio",
                 "url": "https://dungbubu.com/common/home",
                 "sameAs": ["https://www.facebook.com/facebook","youtube.com"],
                 "logo": {
                    "@type": "ImageObject",
                    "@id": "https://dungbubu.com/common/home#logo",
                    "url": "https://dungbubu.com/image/catalog/2_logo/logo.svg",
                    "caption": "DungBu · Portfolio"
                 },
                 "image": {
                    "@id": "https://dungbubu.com/common/home#logo"
                 }
              },
              {
                 "@type": "WebSite",
                 "@id": "https://dungbubu.com/common/home#website",
                 "url": "https://dungbubu.com/common/home",
                 "name": "DungBu · Portfolio",
                 "publisher": {
                    "@id": "https://dungbubu.com/common/home#organization"
                 },
                 "potentialAction": {
                    "@type": "SearchAction",
                    "target": "https://dungbubu.com/common/homeproduct/search?search={search_term_string}",
                    "query-input": "required name=search_term_string"
                 }
              },
              {
                 "@type": "WebPage",
                 "@id": "https://dungbubu.com/common/home#webpage",
                 "url": "https://dungbubu.com/common/home",
                 "inLanguage": "vi",
                 "name": "DungBu · Portfolio",
                 "isPartOf": {
                    "@id": "https://dungbubu.com/common/home#website"
                 },
                 "about": {
                    "@id": "https://dungbubu.com/common/home#organization"
                 },
                 "description": "Hi! I'm Dungbubu - a Freelance Digital Designer from Vietnam. Welcome to my Portfolio, where you can find a collection of my projects including Website design, Landing pages, PowerPoint presentations, and more. I hope you have an enjoyable experience"
              }
           ]
        }
    </script>
    <link href="index.html" rel="canonical" />

    <link rel="stylesheet" href="style.css" class="css">


    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-D5K2K1N41X"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-D5K2K1N41X');
    </script>

    
    <?php wp_head();?>
</head>

<body class="common-home" data-scroll-container <?php body_class();?>>
    <div class="intro-layer">
        <?php 
            // Website Preloder
            $preloder = get_theme_mod('website_preloder');

            // Website Preloder text convart to array
            $preloder = explode(' ', $preloder);
        ?>

        <div class="intro-layer-box intro-layer-top fs-80 fw-600 text-white">
            <div class="intro-layer-text"><?php echo $preloder[0]; ?></div>
        </div>
        <?php if(!empty($preloder[1])):?>
            <div class="intro-layer-box intro-layer-bottom fs-80 fw-600 text-white">
                <div class="intro-layer-text"><?php echo $preloder[1]; ?></div>
            </div>
        <?php endif;?>
    </div>
    <main id="home">
        <div class="topbar mt-20 disable-mb" data-scroll-section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-4">
                        <div class="logo">
                            <a href="<?php echo get_home_url();?>">
                                 <?php
                                 // Add Custom Logo
                                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                                    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                    if ( has_custom_logo() ) {
                                        echo '<img src="' . esc_url( $image[0] ) . '" alt="logo">';
                                    } else {
                                        echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/catalog/2_logo/logo.svg" alt="logo">';
                                    }
                                ?>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-12 col-12 d-none d-xl-block">
                        <div class="row">
                            <div class="col-xl-6 col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <div class="topbar-item">
                                    <div class="topbar-item__title fw-400 font-tnr text-italic">
                                        Sitemap:
                                    </div>
                                    <div class="topbar-item__desc">
                                        <!-- <a class="hover-animation" href="about-me.html">About me</a>
                                        <a class="hover-animation" href="projects.html">Projects</a> -->
                                        <?php 
                                        // Add Primary Menu
                                        wp_nav_menu( array(
                                            'menu' => 'primary',
                                            'theme_location' => 'primary',
                                            'menu_class' => 'hover-animation',
                                        ) );
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                <div id="topbar-right"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10 d-none d-md-block d-sm-block d-xl-none">
                        <div class="topbar-item text-right">
                            <div class="topbar-item__title fw-400 font-tnr text-italic d-none d-xl-block">Sitemap:</div>
                            <div class="topbar-item__desc">
                                <!-- <a class="hover-animation" href="about-me.html">About me</a>
                                <a class="hover-animation" href="projects.html">Projects</a> -->
                                <?php 
                                // Add Primary Menu
                                wp_nav_menu( array(
                                    'menu' => 'primary',
                                    'theme_location' => 'primary',
                                    'menu_class' => 'hover-animation',
                                ));
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-8 d-block d-sm-none text-right">
                        <div class="hamburger">
                            <span class="hamburger-btn"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="menu-mb">
            <div class="menu-mb-wrap">
                <div class="menu-mb__main">
                    <p class="font-tnr font-italic mb-10">Sitemap:</p>
                    <!-- <ul>
                        <li style="animation-delay: 0s"><a href="about-me.html"
                                class="fs-48 fw-700 text-uppercase">About me</a></li>
                        <li style="animation-delay: 0.1s"><a href="projects.html"
                                class="fs-48 fw-700 text-uppercase">Projects</a></li>
                    </ul> -->
                    <ul>
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'primary',
                            'container'      => false,
                            'items_wrap'     => '%3$s', // This removes the <ul> wrapper added by wp_nav_menu()
                            'depth'          => 1,
                            'walker'         => new WP_Custom_Navwalker() // Custom walker for adding animation delay
                        ) );
                        ?>
                    </ul>

                </div>
                <div id="menu-mb__bottom"></div>
            </div>
        </div>
        <div id="cursor">
            <div class="cursor__circle"></div>
        </div>
        <div class="topbar-right" style="display: none;">
            <div class="d-flex justify-content-between">
                <div class="topbar-item">
                    <div class="topbar-item__title fw-400 font-tnr text-italic">Status:</div>
                    <div class="topbar-item__desc">
                        <p><?php echo esc_html(get_theme_mod('freelance_availability_message', 'Available for freelance projects from 18th July'));?></p>
                    </div>
                </div>
                <div class="topbar-item">
                    <div class="topbar-item__title fw-400 font-tnr text-italic">Location:</div>
                    <div class="topbar-item__desc">Local time <span class="location-time__realtime"></span>, 
                        <?php 
                            // Retrieve the timezone string set in WordPress
                            $timezone_string = get_option('timezone_string');

                            // Retrieve the GMT offset if the timezone string is not set
                            if (!$timezone_string) {
                                $gmt_offset = get_option('gmt_offset');
                                if ($gmt_offset) {
                                    $timezone_string = 'UTC' . ($gmt_offset >= 0 ? '+' : '-') . abs($gmt_offset);
                                } else {
                                    $timezone_string = 'UTC'; // Default to UTC if no offset is set
                                }
                            }

                            // Display the timezone
                            echo $timezone_string;

                        ?>
                    </div>
                </div>
            </div>
            <script>
                window.addEventListener('DOMContentLoaded', (event) => {
                    appendHtml('#topbar-right', '.topbar-right');
                });
            </script>
        </div>
        <div class="menu-mb__bottom" style="display: none;">
            <ul>
                <li><a href="https://www.facebook.com/NguyenManhDung1996/">Facebook</a></li>
                <li><a href="https://www.instagram.com/dungbubu/">Instagram</a></li>
                <li><a href="https://t.me/dungbubu">Telegram</a></li>
            </ul>

            <style>
                @media (max-width: 1200px) {
                    .menu-mb__bottom ul {
                        display: grid;
                        grid-template-columns: repeat(3, 1fr);
                        grid-gap: 10px;
                    }

                    .menu-mb__bottom ul li:not(:last-child):after {
                        content: "";
                        position: absolute;
                        width: 1px;
                        height: 100%;
                        background: rgba(77, 77, 77, 1);
                        right: -6px;
                        top: 0;
                    }
                }
            </style>

            <script>
                window.addEventListener('DOMContentLoaded', (event) => {
                    appendHtml('#menu-mb__bottom', '.menu-mb__bottom');
                });
            </script>
        </div>