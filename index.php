<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="theme-color" content="#FFFFFF" />
    <title>DungBu · Portfolio</title>
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

    <link rel="icon" href="<?php echo get_template_directory_uri();?>/assets/img/catalog/2_logo/favicon.png" />

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
    <link href="<?php echo get_template_directory_uri();?>/assets/img/catalog/2_logo/favicon.png" rel="icon" />
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

    <?php
    // Create a theme dirictory Path
    $path = get_template_directory_uri() . '/'; ?>
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo $path; ?>assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $path; ?>assets/css/swiper.scss.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $path; ?>assets/css/locomotive-scroll.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $path; ?>assets/css/jquery.fancybox.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $path; ?>assets/css/global.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $path; ?>assets/css/variables.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $path; ?>assets/css/main2989.css?v=1635817336" type="text/css">

    <script type="text/javascript" src="<?php echo $path; ?>assets/js/jquery-3.3.1.min.js"></script>
    <link href="<?php echo $path; ?>assets/css/stylesheet2989.css?v=1635817336" rel="stylesheet" />
</head>

<body class="common-home" data-scroll-container>
    <div class="intro-layer">
        <div class="intro-layer-box intro-layer-top fs-80 fw-600 text-white">
            <div class="intro-layer-text">Dungbubu</div>
        </div>
        <div class="intro-layer-box intro-layer-bottom fs-80 fw-600 text-white">
            <div class="intro-layer-text">Portfolio</div>
        </div>
    </div>
    <main id="home">
        <div class="topbar mt-20 disable-mb" data-scroll-section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-4">
                        <div class="logo">
                            <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/catalog/2_logo/logo.svg" alt="logo"></a>
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
                                        <a class="hover-animation" href="about-me.html">About me</a>
                                        <a class="hover-animation" href="projects.html">Projects</a>
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
                                <a class="hover-animation" href="about-me.html">About me</a>
                                <a class="hover-animation" href="projects.html">Projects</a>
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
                    <ul>
                        <li style="animation-delay: 0s"><a href="about-me.html"
                                class="fs-48 fw-700 text-uppercase">About me</a></li>
                        <li style="animation-delay: 0.1s"><a href="projects.html"
                                class="fs-48 fw-700 text-uppercase">Projects</a></li>
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
                        <p>Available for freelance projects from 18th July</p>
                    </div>
                </div>
                <div class="topbar-item">
                    <div class="topbar-item__title fw-400 font-tnr text-italic">Location:</div>
                    <div class="topbar-item__desc">Local time <span class="location-time__realtime"></span>, GMT (+7:00)
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
        <div id="hero" data-scroll-section>
            <div class="hero-wrap jarallax"
                style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/cache/catalog/1-dungbubu/dungbubu-1920x1080.png');">
                <div class="hero-content">
                    <div class="container-fluid">
                        <div class="d-flex justify-content-between" data-scroll data-scroll-speed="0.5">
                            <div class="hero-title fs-140 fw-700 text-white text-uppercase">
                                Freelance <br> Digital designer </div>
                            <div class="hero-desc text-white d-none d-xl-block">
                                <div class="">
                                    <a href="mailto: Nguyenmanhdung1996@gmail.com"
                                        class="hover-animation">Nguyenmanhdung1996@gmail.com </a>
                                </div>
                                <div class="">
                                    <a href="tel: +84346189173" class="hover-animation">(+84)346189173 </a>
                                </div>
                                <div class="social_list">
                                    <a href="https://www.facebook.com/NguyenManhDung1996/"
                                        class="hover-animation">Facebook </a>
                                </div>
                                <div class="social_list">
                                    <a href="https://www.instagram.com/dungbubu/" class="hover-animation">Instagram </a>
                                </div>
                                <div class="social_list">
                                    <a href="https://t.me/dungbubu" class="hover-animation">Telegram </a>
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
                    <span>Business website</span>
                    <span>Ecommerce website</span>
                    <span>Landingpage</span>
                    <span>Mobile app</span>
                    <span>Ui design</span>
                    <span>Motion graphic</span>
                    <span>Powerpoint presentation</span>
                    <span>Company profile</span>
                    <span>Social media</span>
                    <span>Business website</span>
                    <span>Ecommerce website</span>
                    <span>Landingpage</span>
                    <span>Mobile app</span>
                    <span>Ui design</span>
                    <span>Motion graphic</span>
                    <span>Powerpoint presentation</span>
                    <span>Company profile</span>
                    <span>Social media</span>
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

        <div id="footer">
            <div class="footer-wrap section-relative bg-black pt-80 pb-40" data-scroll-section>
                <div class="container-fluid">
                    <div class="row d-block d-xl-none text-center">
                        <p class="fs-16 text-white text-center mb-20">
                            <a class="back-to-top" href="javascript:void(0)">[Back to top ↑]</a>
                        </p>
                    </div>
                    <div class="footer-title text-center mb-20">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/catalog/2_logo/logo_footer.svg" alt="">
                    </div>
                    <div class="row">
                        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                            <div class="fs-18 fw-400 text-white d-none d-xl-block" style="color: #fff">
                                <p>A designer from Vietnam passionate about minimalistic style.</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 d-none d-xl-block">
                            <p class="fs-18 fw-400 text-white text-right">
                                <a class="back-to-top hover-animation" href="javascript:void(0)">[Back to top ↑]</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SCRIPT THEME -->
        <script src="<?php echo $path; ?>assets/js/bootstrap.min.js" defer></script>
        <script src="<?php echo $path; ?>assets/js/swiper-bundle.min.js" defer></script>
        <script src="<?php echo $path; ?>assets/js/gsap.min.js" defer></script>
        <script src="<?php echo $path; ?>assets/js/ScrollTrigger.min.js" defer></script>
        <script src="<?php echo $path; ?>assets/js/locomotive-scroll.min.js"></script>
        <script src="<?php echo $path; ?>assets/js/jquery.mixitup.min.js" defer></script>
        <script src="<?php echo $path; ?>assets/js/jquery.marquee.min.js" defer></script>
        <script src="<?php echo $path; ?>assets/js/jquery.fancybox.min.js" defer></script>
        <script src="<?php echo $path; ?>assets/js/main.js" defer></script>
    </main>

    <script src="catalog/view/theme/default/javascript/product_option.js" type="text/javascript"></script>


    <!-- Facebook script -->
    <div id="fb-root"></div>
    <script type="text/javascript">
        setTimeout(function () {
            (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s);
                js.id = id;
                js.src = "../connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=829732533863539";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        }, 5000);
    </script>
</body>

<!-- Mirrored from dungbubu.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jul 2024 04:59:39 GMT -->

</html>