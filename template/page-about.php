<?php
// Template Name: About Page
get_header();
?>

        <div id="breadcrumb">
            <div class="breadcrumb-wrap text-white pt-220 pb-20">
                <div class="container-fluid">
                    <p class="breadcrumb-subtext font-tnr font-italic fw-400" style="display: none"><?php echo esc_html(get_theme_mod('about_section_sub_title'));?></p>
                    <p class="breadcrumb-title text-uppercase fw-700"><?php the_title();?></p>
                </div>
            </div>
        </div>
        <div class="about-main bg-white section-relative" data-scroll-section>
            <div class="topbar-right" style="display: none;">
                <div class="d-flex justify-content-between">
                </div>
                <script>
                    window.addEventListener('DOMContentLoaded', (event) => {
                        appendHtml('#topbar-right', '.topbar-right');
                    });
                </script>
            </div>
            <div class="menu-mb__bottom" style="display: none;">
                
            </div>
            <script>
                window.addEventListener('DOMContentLoaded', (event) => {
                    $('.breadcrumb-subtext').html('<?php echo esc_html(get_theme_mod('about_section_sub_title'));?>').show();
                });
            </script>
            <div id="about">
                <div class="about-wrap section-relative disable-tablet disable-mb" data-scroll data-scroll-offset="0, 0"
                    data-scroll-sticky data-scroll-target=".about-main">
                    <div class="container-fluid">
                        <div class="about-top pt-120 pb-120">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 d-lg-block d-sm-none d-none"></div>
                                <div class="col-xl-4 col-lg-8 col-md-8 col-sm-12 col-12">
                                    <div class="about-text__me disable-mb content-animation" data-scroll
                                        data-scroll-offset="0, 30%" data-scroll-sticky data-scroll-target=".about-main">
                                        <div class="about-title fs-40 fw-400 pb-20"><?php echo esc_html(get_theme_mod('about_section_title'));?></div>
                                        <div class="about-desc">
                                            <p><?php echo esc_html(get_theme_mod('about_section_description'));?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-4 d-md-block d-sm-none d-none text-right">
                                    <div class="about-img content-animation" data-scroll data-scroll-offset="0, 30%"
                                        data-scroll-sticky data-scroll-target=".about-main">
                                        <img src="<?php echo esc_url(get_theme_mod('about_section_image'));?>" alt="<?php echo esc_html(get_theme_mod('about_section_title'));?>"
                                            style="aspect-ratio: 3/4;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-me">
                <div id="about-detail__4">
                    <div class="about-detail__wrap--4">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-8 col-sm-8 col-12">
                                    <div class="about-section__title pb-20 heading-animation">
                                        <div class="head-animation">My Journey</div>
                                    </div>
                                    <div class="about-detail__content--4 about-section__content content-animation">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                                <div class="font-tnr font-italic fw-400">2021 - now</div>
                                            </div>
                                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                                                <div>
                                                    <p>Website and Ui/Ux designer</p>
                                                    <p class="fs-10 text-grey">Zozo.vn</p>
                                                    <ul>
                                                        <li>Building user flows</li>
                                                        <li>Designing in Figma</li>
                                                        <li>Conceptualising web animations</li>
                                                        <li>Collaborating with the Front-end team</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                                <div class="font-tnr font-italic fw-400">2018 - 2021</div>
                                            </div>
                                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                                                <div>
                                                    <p>Teaching assistant &amp; Presentation designer</p>
                                                    <p class="fs-10 text-grey">9Slide.vn</p>
                                                    <div id="gtx-trans"
                                                        style="position: absolute; left: -70px; top: -12px;">
                                                        <div class="gtx-trans-icon">&nbsp;</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                                <div class="font-tnr font-italic fw-400">2014 - 2018</div>
                                            </div>
                                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                                                <div>
                                                    <p>Graduated with an engineering degree</p>
                                                    <p class="fs-10 text-grey">University of Transport Technology</p>
                                                    <div id="gtx-trans"
                                                        style="position: absolute; left: -15px; top: 76.3906px;">
                                                        <div class="gtx-trans-icon">&nbsp;</div>
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
                <div id="about-detail__5">
                    <div class="about-detail__wrap--5">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-8 col-sm-8 col-12">
                                    <div class="about-section__title pb-20 heading-animation">
                                        <div class="head-animation">Experience</div>
                                    </div>
                                    <div class="about-detail__content--5 about-section__content content-animation">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                                <div class="font-tnr font-italic fw-400">Year of experiences</div>
                                            </div>
                                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                                                <div>
                                                    <p>8 years</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                                <div class="font-tnr font-italic fw-400">Completed Projects</div>
                                            </div>
                                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                                                <div>
                                                    <p>40+ projects</p>
                                                    <div id="gtx-trans"
                                                        style="position: absolute; left: -88px; top: 38px;">
                                                        <div class="gtx-trans-icon">&nbsp;</div>
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
                <div id="clients">
                    <div class="clients-wrap pb-100">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-8 col-sm-8 col-12">
                                    <div class="about-section__title pb-20 heading-animation">
                                        <div class="head-animation">Clients</div>
                                    </div>
                                    <div class="clients-content about-section__content content-animation">
                                        <div class="clients-item">
                                            <p class="font-tnr font-italic fw-400 text-grey__2">A</p>
                                            <div class="clients-item__content">
                                                <p>Art&eacute;co</p>
                                                <p>Aura Club</p>
                                                <p>APEC Schools</p>
                                                <p>Action on Poverty</p>
                                            </div>
                                        </div>
                                        <div class="clients-item">
                                            <p class="font-tnr font-italic fw-400 text-grey__2">B</p>
                                            <div class="clients-item__content">
                                                <p>Bepage</p>
                                                <p>Bizman Sky</p>
                                            </div>
                                        </div>
                                        <div class="clients-item">
                                            <p class="font-tnr font-italic fw-400 text-grey__2">C</p>
                                            <div class="clients-item__content">
                                                <p>Customchic</p>
                                            </div>
                                        </div>
                                        <div class="clients-item">
                                            <p class="font-tnr font-italic fw-400 text-grey__2">D</p>
                                            <div class="clients-item__content">
                                                <p>Dewoo Group</p>
                                                <p>Dai Phong JSC</p>
                                            </div>
                                        </div>
                                        <div class="clients-item">
                                            <p class="font-tnr font-italic fw-400 text-grey__2">F</p>
                                            <div class="clients-item__content">
                                                <p>FTA E&amp;C</p>
                                                <p>First Alliances</p>
                                            </div>
                                        </div>
                                        <div class="clients-item">
                                            <p class="font-tnr font-italic fw-400 text-grey__2">G</p>
                                            <div class="clients-item__content">
                                                <p>Growell Vietnam</p>
                                            </div>
                                        </div>
                                        <div class="clients-item">
                                            <p class="font-tnr font-italic fw-400 text-grey__2">I</p>
                                            <div class="clients-item__content">
                                                <p>iNET</p>
                                                <p>ISU</p>
                                                <p>ITE HCMC 2019</p>
                                                <p>IEC Winter wolf</p>
                                            </div>
                                        </div>
                                        <div class="clients-item">
                                            <p class="font-tnr font-italic fw-400 text-grey__2">K</p>
                                            <div class="clients-item__content">
                                                <p>KD Tech</p>
                                            </div>
                                        </div>
                                        <div class="clients-item">
                                            <p class="font-tnr font-italic fw-400 text-grey__2">L</p>
                                            <div class="clients-item__content">
                                                <p>Lam Dong II Hospital</p>
                                            </div>
                                        </div>
                                        <div class="clients-item">
                                            <p class="font-tnr font-italic fw-400 text-grey__2">M</p>
                                            <div class="clients-item__content">
                                                <p>MIBS</p>
                                                <p>Me Linh Plaza</p>
                                                <p>M&amp;A Vietnam</p>
                                            </div>
                                        </div>
                                        <div class="clients-item">
                                            <p class="font-tnr font-italic fw-400 text-grey__2">N</p>
                                            <div class="clients-item__content">
                                                <p>Netco Post</p>
                                                <p>Ngoc Viet Entertainment</p>
                                                <p>Nguyen Sang Service Co.,LTD</p>
                                            </div>
                                        </div>
                                        <div class="clients-item">
                                            <p class="font-tnr font-italic fw-400 text-grey__2">P</p>
                                            <div class="clients-item__content">
                                                <p>Phoenix MF Co.,LTD</p>
                                                <p>Phan Dinh Phung High school</p>
                                            </div>
                                        </div>
                                        <div class="clients-item">
                                            <p class="font-tnr font-italic fw-400 text-grey__2">S</p>
                                            <div class="clients-item__content">
                                                <p>Savvycom</p>
                                            </div>
                                        </div>
                                        <div class="clients-item">
                                            <p class="font-tnr font-italic fw-400 text-grey__2">T</p>
                                            <div class="clients-item__content">
                                                <p>Timind</p>
                                                <p>Techcombank</p>
                                                <p>Techmaster</p>
                                                <p>Thien Vu Audio</p>
                                                <p>Tinh Van Group</p>
                                            </div>
                                        </div>
                                        <div class="clients-item">
                                            <p class="font-tnr font-italic fw-400 text-grey__2">U</p>
                                            <div class="clients-item__content">
                                                <p>UTT</p>
                                            </div>
                                        </div>
                                        <div class="clients-item">
                                            <p class="font-tnr font-italic fw-400 text-grey__2">V</p>
                                            <div class="clients-item__content">
                                                <p>Viettinbank</p>
                                                <p>VAS Track 2019</p>
                                                <p>Vincom Royal Park</p>
                                            </div>
                                        </div>
                                        <div class="clients-item">
                                            <p class="font-tnr font-italic fw-400 text-grey__2">Z</p>
                                            <div class="clients-item__content">
                                                <p>Zozo</p>
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
        <div id="about-serivce">
            <div class="about-service-wrap section-relative" data-scroll-section>
                <div class="hero-marquee">
                    <div class="hero-marquee-inner" aria-hidden="true">
                        <?php
                            // Abour page hade line move risht to left
                            $hade_line = get_theme_mod('hero_hade_line');
                            // string to array
                            $hade_line = explode(',', $hade_line);
                            foreach ($hade_line as $key => $value) {
                                echo '<span class="font-tnr font-italic fw-400 fs-120">'.$value.'</span>';
                            }
                        ?>
                    </div>
                    <div class="hero-marquee-inner hero-marquee-reverse" aria-hidden="true">
                        <?php
                            // Abour page hade line move left to right
                            $hade_line = get_theme_mod('hero_hade_line');
                            // string to array
                            $hade_line = explode(',', $hade_line);
                            foreach ($hade_line as $key => $value) {
                                echo '<span class="font-tnr font-italic fw-400 fs-120">'.$value.'</span>';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    <?php
    get_footer();
    ?>