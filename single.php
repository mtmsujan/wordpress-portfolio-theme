<?php get_header(); ?>
<div id="project-detail-hero">
    <div class="hero__top"></div>
        <div class="hero__main">
            <style>
                .project-detail__next--bg {
                    /* background: url('<?php //echo get_the_template_directory_uri();?>/assets/img/catalog/melinh_plaza/melinhplaza-homepage_background_2.png'); */
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position: center;
                    overflow: hidden;
                    aspect-ratio: 5 / 2;
                }

                .project-detail__next--image {
                    position: absolute;
                    top: 0;
                    left: 50%;
                    transform: translateX(-50%);
                    /* background: url('<?php //echo get_the_template_directory_uri();?>/assets/img/catalog/melinh_plaza/melinhplaza-homepage_product_2.png'); */
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position: center;
                    height: 100%;
                    aspect-ratio: 1;
                    overflow: hidden;
                }

                .hero__main--bg {
                    background: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full');?>');
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position: center;
                    overflow: hidden;
                }

                .hero__main--img {
                    position: absolute;
                    top: 0;
                    left: 50%;
                    transform: translateX(-50%);
                    /* background: url('<?php //echo get_the_template_directory_uri();?>/assets/img/cache/catalog/aura-club/auraclub-homepage-product-2-1920x1080.png'); */
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position: center;
                    height: calc(100vh - 100px);
                    aspect-ratio: 1;
                    overflow: hidden;
                }
            </style>
            <div class="hero__main--bg"></div>
            <div class="hero__main--img"></div>
        </div>
    </div>
    <div id="project-detail" class="bg-white" data-scroll-section>
        <div class="project-detail-wrap pt-80">
            <div class="container-fluid">
                <div class="row">
                    <div
                        class="col-xl-4 col-lg-4 col-md-8 col-sm-8 col-12 order-xl-2 order-lg-2 order-md-1 order-sm-1 order-1">
                        <div class="project-detail__right disable-mb" data-scroll data-scroll-offset="-8%, 30%"
                            data-scroll-sticky data-scroll-target=".project-detail__left">
                            <div class="project-detail__description text-justify-center content-animation">
                                <p><?php the_content(); ?></p>
                            </div>
                            <div class="dungbu-btn pt-40 fs-40 content-animation">
                                <span class="fw-400">Live preview</span>
                                <?php $project_url = get_post_meta( $post->ID, '_project_url', true ); ?>
                                <a target="_blank" href="<?php echo $project_url; ?>">
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
                    <div
                        class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 order-xl-1 order-lg-1 order-md-2 order-sm-2 order-2">
                        <div class="project-detail__left">
                            <div class="project-detail__top d-none d-lg-block">
                                <div class="row align-items-center">
                                    <div class="col-xl-8 col-lg-8">
                                        <div class="project-detail__name fs-40 fw-400 content-animation"><?php the_title(); ?></div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4">
                                        <div
                                            class="project-detail__sub d-flex justify-content-between content-animation">
                                            <span class="font-tnr font-italic fw-400 pr-40">

                                            </span>
                                            <span class="font-tnr font-italic fw-400">
                                                <!-- Post Date -->
                                                <?php echo get_the_date("Y"); ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="project-detail__main pt-40 mb-80">
                                <div class="row">
                                <?php
                                    $project_gallery = get_post_meta($post->ID, '_project_gallery', true);

                                    // Show project gallery
                                    if (!empty($project_gallery)) {
                                        $gallery_images = unserialize($project_gallery);

                                        // Ensure $gallery_images is an array before using foreach
                                        if (is_array($gallery_images)) {
                                            foreach ($gallery_images as $image_url) {
                                                ?>
                                                <div class="col-12">
                                                    <div class="project-detail__img content-animation">
                                                        <?php echo '<img src="' . esc_url($image_url) . '" alt="' . esc_attr(get_the_title()) . '" />'; ?>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                        } else {
                                            echo '<p>There was an error loading the gallery images.</p>';
                                        }
                                    }
                                ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12"></div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="project-detail__bottom">
                            <div class="project-detail__next">
                                <div
                                    class="project-detail__next--sub font-tnr font-italic fw-400 pb-20 content-animation">
                                    Next project</div>
                                <div
                                    class="project-detail__next--name fs-40 fw-400 pb-20 d-block d-lg-none content-animation">
                                    Melinh Plaza</div>
                                <div class="project-detail__next--img content-animation">
                                    <div class="project-detail__next--bg"></div>
                                    <div class="project-detail__next--image"></div>
                                    <div class="project__btn dungbu-btn fs-40">
                                        <a href="melinh-plaza.html">
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
                                <div
                                    class="project-detail__next--name fs-40 fw-400 pb-20 pt-20 d-none d-lg-block content-animation">
                                    Melinh Plaza</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
