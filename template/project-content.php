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
                /* Show Project Thumbnail */
                background: url('<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>');
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
                            <div class="project-name fw-400 fs-40 mb-20"><?php the_title();?></div>
                            <div class="project-description text-justify-center mb-40">
                                <p><?php the_content();?></p>
                            </div>
                            <div class="project-sub">
                                <ul>
                                    <li>
                                        <span class="font-tnr fw-400 text-italic">Category:</span>
                                        <?php 
                                            // Show project category
                                            $project_categorys = get_the_terms(get_the_ID(), 'project_category');
                                            if($project_categorys && !is_wp_error($project_categorys)){
                                                $cate_count = count($project_categorys);
                                                $i = 1;
                                                foreach($project_categorys as $project_category){
                                                    ?>
                                                    <span><?php echo esc_html($project_category->name);?><?php echo $i < $cate_count ? ',' : ''; ?> </span>
                                                    <?php
                                                    $i++;
                                                }
                                            }
                                        ?>
                                    </li>
                                    <li>
                                        <span class="font-tnr fw-400 text-italic">Role:</span>
                                        <?php 
                                            // Show project role
                                            $project_roles = get_the_terms(get_the_ID(), 'project_role');
                                            if($project_roles && !is_wp_error($project_roles)){
                                                $role_count = count($project_roles);
                                                $i = 1;
                                                foreach($project_roles as $project_role){
                                                    ?>
                                                    <span><?php echo esc_html($project_role->name);?><?php echo $i < $role_count ? ',' : '';?> </span>
                                                    <?php
                                                    $i++;
                                                }
                                            }
                                        ?>
                                    </li>
                                    <li>
                                        <span class="font-tnr fw-400 text-italic">Tag:</span>
                                        <?php
                                            // Show project tag
                                            $project_tags = get_the_terms(get_the_ID(), 'project_tag');
                                            if ($project_tags && !is_wp_error($project_tags)) {
                                                $tag_count = count($project_tags);
                                                $i = 1;
                                                foreach ($project_tags as $project_tag) {
                                                    ?>
                                                    <span><?php echo esc_html($project_tag->name); ?><?php echo $i < $tag_count ? ',' : ''; ?> </span>
                                                    <?php
                                                    $i++;
                                                }
                                            }
                                        ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="project__btn dungbu-btn fs-40 content-animation">
                            <span class="fw-400">Project details</span>
                            <a href="<?php the_permalink(); ?>">
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
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="project-img-wrap__115">
                        <div class="project-bg" data-scroll data-scroll-speed="0.5"></div>
                        <div class="project-img"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12 d-block d-lg-none">
                    <div class="project-text">
                        <div class="project-name fw-400 fs-40 mb-20"><?php the_title(); ?></div>
                        <div class="project-description text-justify-center mb-40">
                            <p><?php the_content(); ?></p>
                        </div>
                        <div class="project-sub">
                            <ul>
                                <li>
                                    <span class="font-tnr fw-400 text-italic">Category:</span>
                                    <?php 
                                        // Show project category
                                        $project_categorys = get_the_terms(get_the_ID(), 'project_category');
                                        if($project_categorys && !is_wp_error($project_categorys)){
                                            $cate_count = count($project_categorys);
                                            $i = 1;
                                            foreach($project_categorys as $project_category){
                                                ?>
                                                <span><?php echo esc_html($project_category->name);?><?php echo $i < $cate_count ? ',' : ''; ?> </span>
                                                <?php
                                                $i++;
                                            }
                                        }
                                    ?>
                                </li>
                                <li>
                                    <span class="font-tnr fw-400 text-italic">Role:</span>
                                    <?php 
                                        // Show project role
                                        $project_roles = get_the_terms(get_the_ID(), 'project_role');
                                        if($project_roles && !is_wp_error($project_roles)){
                                            $role_count = count($project_roles);
                                            $i = 1;
                                            foreach($project_roles as $project_role){
                                                ?>
                                                <span><?php echo esc_html($project_role->name);?><?php echo $i < $role_count ? ',' : '';?> </span>
                                                <?php
                                                $i++;
                                            }
                                        }
                                    ?>
                                </li>
                                <li>
                                    <span class="font-tnr fw-400 text-italic">Tag:</span>
                                    <?php
                                        // Show project tag
                                        $project_tags = get_the_terms(get_the_ID(), 'project_tag');
                                        if ($project_tags && !is_wp_error($project_tags)) {
                                            $tag_count = count($project_tags);
                                            $i = 1;
                                            foreach ($project_tags as $project_tag) {
                                                ?>
                                                <span><?php echo esc_html($project_tag->name); ?><?php echo $i < $tag_count ? ',' : ''; ?> </span>
                                                <?php
                                                $i++;
                                            }
                                        }
                                    ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="project__btn dungbu-btn fs-40">
                        <span class="fw-400">Project details</span>
                        <a target="_blank" href="<?php the_permalink(); ?>">
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
        </div>
    </div>
</div>