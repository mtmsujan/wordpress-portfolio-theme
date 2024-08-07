<?php
// Template Name: Projects Page
get_header();
?>

<div id="breadcrumb">
    <div class="breadcrumb-wrap text-white pt-220 pb-20">
        <div class="container-fluid">
            <p class="breadcrumb-subtext font-tnr font-italic fw-400" style="display: none">
                <?php echo esc_html(get_theme_mod('project_page_sub_title')); ?></p>
            <p class="breadcrumb-title text-uppercase fw-700"><?php the_title(); ?></p>
        </div>
    </div>
</div>
<div class="menu-mb__bottom" style="display: none;">
    <script>
        window.addEventListener('DOMContentLoaded', (event) => {
            appendHtml('#menu-mb__bottom', '.menu-mb__bottom');
        });
    </script>
</div>
<script>
    window.addEventListener('DOMContentLoaded', (event) => {
        $('.breadcrumb-subtext').html('<?php echo esc_html(get_theme_mod('project_page_sub_title')); ?>').show();
    });
</script>
<div id="projects-list">
    <div class="projects-list-wrap bg-white pt-80" data-scroll-section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                    <div class="row">
                        <?php
                        // Get all projects
                        $args = array(
                            'post_type' => 'project',
                            'posts_per_page' => -1,
                        );
                        $projects = new WP_Query($args);

                        if ($projects->have_posts()) {
                            while ($projects->have_posts()) {
                                $projects->the_post();
                                // Get projects Category
                                $project_categorys = get_the_terms(get_the_ID(), 'project_category');
                                $project_classes = '';
                                if($project_categorys && !is_wp_error($project_categorys)){
                                    foreach($project_categorys as $project_category){
                                        // Concatenate project category slugs to be used as classes
                                        $project_classes .= ' '.$project_category->slug;
                                    }
                                }
                                ?>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 project-item <?php echo esc_attr($project_classes); ?>">
                                    <div class="_project-item">
                                        <style>
                                            <style>.project-img-wrap__115 {
                                                position: absolute;
                                                right: 0;
                                                top: 8rem;
                                                width: 100%;
                                                height: 100%;
                                                overflow: hidden;
                                                z-index: 0;
                                            }

                                            .project-img-wrap__115 .project-bg {
                                                position: relative;
                                                top: 0;
                                                /* background: url('<?php //echo get_template_directory_uri(); ?>/assets/img/catalog/aura_club/auraclub-homepage_product_2.png'); */
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;
                                                overflow: hidden;
                                                z-index: 1;
                                            }

                                            .project-img-wrap__115 .project-img {
                                                position: absolute;
                                                top: -8rem;
                                                right: 0;
                                                /* background: url('<?php //the_post_thumbnail_url(); ?>'); */
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
                                        </style>
                                        <div class="project-img-wrap__115">
                                            <a href="<?php echo get_the_permalink(); ?>">
                                                <div class="project-bg"><img src="<?php the_post_thumbnail_url(); ?>"
                                                        alt="<?php the_title(); ?>"></div>
                                                <div class="project-img"></div>
                                            </a>
                                        </div>
                                        <div class="project__btn dungbu-btn fs-40">
                                            <a href="<?php echo get_the_permalink(); ?>">
                                                <span class="dungbu-btn__icon ml-30 bg-white magnetic" data-strength="50"
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
                                <?php
                            }
                            wp_reset_postdata();
                        }
                        ?>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                    <div class="project-filter text-right" data-scroll data-scroll-offset="0, 10%" data-scroll-sticky
                        data-scroll-target=".projects-list-wrap">
                        <ul>
                            <li class="active font-italic filter" data-filter="all">
                                <a href="javascript:void(0)">All projects</a>
                            </li>
                            <?php 
                                // Project Filter Categories List 
                                $project_categorys = get_terms( 'project_category' );
                                if($project_categorys && !is_wp_error($project_categorys)){
                                    foreach($project_categorys as $project_category){
                                        $project_category_slug = $project_category->slug;
                                        $project_category_name = $project_category->name;
                                        // Create filter buttons with data-filter attribute
                                        echo '<li class="font-italic filter" data-filter="'.$project_category_slug.'"><a href="javascript:void(0)">'.$project_category_name.'</a></li>';
                                    }
                                }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="project-filter__mb project-filter__second d-block d-lg-none">
            <div class="project-filter__mb--wrap">
                <ul>
                    <li class="active font-italic filter" data-filter="all">
                        <a href="javascript:void(0)">All projects</a>
                    </li>
                    <?php 
                        // Project Filter Categories List
                        $project_categorys = get_terms( 'project_category' );
                        if($project_categorys && !is_wp_error($project_categorys)){
                            foreach($project_categorys as $project_category){
                                $project_category_slug = $project_category->slug;
                                $project_category_name = $project_category->name;
                                // Create filter buttons with data-filter attribute
                                echo '<li class="font-italic filter" data-filter="'.$project_category_slug.'"><a href="javascript:void(0)">'.$project_category_name.'</a></li>';
                            }
                        }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="project-filter__mb d-block d-lg-none">
    <div class="project-filter__mb--wrap">
        <ul>
            <li class="active font-italic filter" data-filter="all">
                <a href="javascript:void(0)">All projects</a>
            </li>
            <?php 
                // Project Filter Categories List
                $project_categorys = get_terms( 'project_category' );
                if($project_categorys && !is_wp_error($project_categorys)){
                    foreach($project_categorys as $project_category){
                        $project_category_slug = $project_category->slug;
                        $project_category_name = $project_category->name;
                        // Create filter buttons with data-filter attribute
                        echo '<li class="font-italic filter" data-filter="'.$project_category_slug.'"><a href="javascript:void(0)">'.$project_category_name.'</a></li>';
                    }
                }
            ?>
        </ul>
    </div>
</div>
<?php
get_footer();
?>