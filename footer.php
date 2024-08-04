<div id="touch" class="bg-white" data-scroll-section>
        <div class="touch-wrap pt-120 pb-120">
            <div class="container-custom">
                <p class="touch__sub-tittle font-italic fw-400 mb-20 content-animation">That's all for now</p>
                <div class="touch__title fs-40 fw-400 text-reveal content-animation">
                    <p><?php echo esc_html(get_theme_mod('footer_section_title'));?></p>
                </div>
                <div class="line mt-80 mb-80"></div>

                <div class="touch-contact content-animation">
                    <ul>
                        <li>
                            <p class="text-grey">Email address:</p>
                            <p><a href="mailto: <?php echo esc_html(get_theme_mod('hero_email'));?>"><?php echo esc_html(get_theme_mod('hero_email'));?></a></p>
                        </li>
                        <li>
                            <p class="text-grey">Phone number:</p>
                            <p><a href="tel: <?php echo esc_html(get_theme_mod('hero_phone'));?>"><?php echo esc_html(get_theme_mod('hero_phone'));?></a></p>
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
                    href="<?php echo esc_html(get_theme_mod('hero_facebook'));?>"><?php echo esc_html(get_theme_mod('hero_facebook_label')); ?></a></li>
            <li><a target="_blank" class="hover-animation" href="<?php echo esc_html(get_theme_mod('hero_instagram'));?>"><?php echo esc_html(get_theme_mod('hero_instagram_label'));?></a>
            </li>
            <li><a target="_blank" class="hover-animation" href="<?php echo esc_html(get_theme_mod('hero_telegram'));?>"><?php echo esc_html(get_theme_mod('hero_telegram_label'));?></a></li>
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
                    <img src="<?php ?><?php echo esc_url(get_theme_mod('footer_logo'));?>" alt="">
                </div>
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                        <div class="fs-18 fw-400 text-white d-none d-xl-block" style="color: #fff">
                            <!-- <p>A designer from Vietnam passionate about minimalistic style.</p> -->
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

        
</main>



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
    <?php wp_footer();?>
</body>

<!-- Mirrored from dungbubu.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jul 2024 04:59:39 GMT -->

</html>