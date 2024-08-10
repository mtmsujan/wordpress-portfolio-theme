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
                <div id="about-detail__5">
                    <div class="about-detail__wrap--5">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-8 col-sm-8 col-12">
                                    <div class="about-section__title pb-20 heading-animation">
                                        <div class="head-animation"><?php echo esc_html(get_theme_mod('experience_section_title'));?></div>
                                    </div>
                                    <div class="about-detail__content--5 about-section__content content-animation">
                                        <?php 
                                            // Experience section list
                                            $experience_section_list = get_theme_mod('experience_section_repeatable');
                                            $experience_section_list = !empty($experience_section_list) ? json_decode($experience_section_list, true) : [];
                                            foreach ($experience_section_list as $key => $value) {
                                                echo '<div class="row">';
                                                echo '<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">';
                                                echo '<div class="font-tnr font-italic fw-400">' . $value['title'] . '</div>';
                                                echo '</div>';
                                                echo '<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">';
                                                echo '<div>' . $value['description'] . '</div>';
                                                echo '</div>';
                                                echo '</div>';
                                            }
                                        ?>
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
                                        <div class="head-animation"><?php echo esc_html(get_theme_mod('clients_section_title'));?></div>
                                    </div>
                                        <?php 
                                            // Get the list of clients
                                            $add_clients_list = get_theme_mod('add_clients_list');

                                            // Check if the retrieved value is a JSON string and decode it
                                            if (is_string($add_clients_list)) {
                                                $add_clients_list = json_decode($add_clients_list, true);
                                            }

                                            // Initialize an array to store categorized clients
                                            $categorized_clients = [];

                                            // Categorize clients by their starting letter
                                            foreach ($add_clients_list as $client) {
                                                $first_letter = strtoupper($client[0]);
                                                if (!isset($categorized_clients[$first_letter])) {
                                                    $categorized_clients[$first_letter] = [];
                                                }
                                                $categorized_clients[$first_letter][] = $client;
                                            }
                                        ?>
                                        <div class="clients-content about-section__content content-animation client-list">
                                            <?php foreach ($categorized_clients as $letter => $clients): ?>
                                                <div class="clients-item">
                                                    <p class="font-tnr font-italic fw-400 text-grey__2"><?php echo esc_html($letter); ?></p>
                                                    <div class="clients-item__content">
                                                        <?php foreach ($clients as $client): ?>
                                                            <p><?php echo esc_html($client); ?></p>
                                                        <?php endforeach; ?>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
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