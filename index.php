
<?php get_header(); ?>


<!-- hero section starts
================================================== -->
        <section id="home" class="dtr-section">
            <div class="dtr-section bg-white dtr-hero-section-top-padding">
                <div class="container dtr-pb-100">

                <?php get_template_part('template_parts/content', 'hero'); ?>

                </div>
            </div>
        </section>
        <!-- hero section ends
================================================== -->

        <!-- section starts
================================================== -->
        <section class="dtr-section dtr-py-100">
            <div class="container">

                <!--== row starts ==-->
                <div class="row">

                    <!-- column 1 starts -->
                    <div class="col-12 col-md-6"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/section-img2.png" alt="image"> </div>
                    <!-- column 1 ends -->

                    <!-- column 2 starts -->
                    <div class="col-12 col-md-6 small-device-space">

                    	<!-- heading starts -->
                        <div class="dtr-section-intro text-left">
                            <div class="dtr-intro-subheading-wrapper">
                                <p class="dtr-intro-subheading">The XaaS App</p>
                            </div>
                            <h2 class="dtr-intro-heading">Increase your<br>
                                conversion rate by 100%<br>
                                - for free.</h2>
                            <p class="dtr-intro-content">There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some form by injected humour or randomised words.</p>
                        </div>
                        <!-- heading ends -->

                        <!-- button -->
                        <a class="dtr-btn btn-blue dtr-px-lg dtr-mt-50" href="#" role="button"> <span class="dtr-btn-text">Try For Free</span> </a>
                    </div>
                    <!-- column 2 ends -->

                </div>
                <!--== row ends ==-->

            </div>
        </section>
        <!-- section ends
================================================== -->

        <!-- services section starts
================================================== -->
<section id="services" class="dtr-section dtr-pt-100 dtr-pb-70 bg-white">
            <div class="container">

                <?php get_template_part('template_parts/content', 'services'); ?>

            </div>
        </section>
        <!-- services section ends
================================================== -->

        <!-- section starts
================================================== -->
        <section class="dtr-section dtr-py-100">
            <div class="container">

            <?php get_template_part('template_parts/content', 'workflow'); ?>

            </div>
        </section>
        <!-- section ends
================================================== -->

        <!-- process section starts
================================================== -->
        <section id="process" class="dtr-section dtr-py-100 bg-white">
            <div class="container">

            <?php get_template_part('template_parts/content', 'process'); ?>

            </div>
        </section>
        <!-- process section ends
================================================== -->

        <!-- team section starts
================================================== -->
        <section id="team" class="dtr-section dtr-pt-100 dtr-pb-70">
            <div class="container">

                <?php get_template_part('template_parts/content', 'team'); ?>

            </div>
        </section>
        <!-- team section ends
================================================== -->

        <!-- tab section starts
================================================== -->
        <section class="dtr-section dtr-py-100 bg-white">
            <div class="container">

                <?php get_template_part('template_parts/content', 'about'); ?>

            </div>
        </section>
        <!-- tab section ends
================================================== -->

        <!-- testimonial section starts
================================================== -->
        <section id="reviews" class="dtr-section dtr-section-with-bg dtr-py-100" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/section-bg-img2.jpg);">

            <!-- overlay -->
            <div class="dtr-overlay dtr-overlay-dark"></div>

            <?php get_template_part('template_parts/content', 'testimonials'); ?>

        </section>
        <!-- testimonial section ends
================================================== -->

        <!-- section starts
================================================== -->
        <section class="dtr-section dtr-pt-100">
            <div class="container">

                <!-- heading starts -->
                <div class="dtr-section-intro text-left dtr-mb-50">
                    <div class="dtr-intro-subheading-wrapper">
                        <p class="dtr-intro-subheading">The Results</p>
                    </div>
                    <h2 class="dtr-intro-heading">Numbers &amp; Satisfaction</h2>
                    <p class="dtr-intro-content">There are many variations of passages of lorem ipsum available<br>
                        but the majority have suffered alteration in some form by<br>
                        injected humour or randomised words.</p>
                </div>
                <!-- heading ends -->

                <!--== row starts ==-->
                <div class="row">

                    <!-- column 1 starts -->
                    <div class="col-12 col-md-4 dtr-py-50">

                        <!-- counter starts -->
                        <div class="dtr-counter"> <i class="icon-cursor-fill color-blue"></i>
                            <div> <span class="dtr-counter-number counting-number color-blue" data-from="1" data-to="20" data-speed="1600">90</span> <span class="dtr-counter-suffix color-light-purple">%</span>
                                <p class="dtr-count-text">Clickthrough Rate</p>
                            </div>
                        </div>
                        <!-- counter ends -->

                    </div>
                    <!-- column 1 ends -->

                    <!-- column 2 starts -->
                    <div class="col-12 col-md-4 dtr-py-50 dtr-border-left dtr-border-right">

                        <!-- counter starts -->
                        <div class="dtr-counter"> <i class="icon-cloud-arrow-down-fill color-blue"></i>
                            <div> <span class="dtr-counter-number counting-number color-blue" data-from="1" data-to="236" data-speed="1600">236</span> <span class="dtr-counter-suffix color-light-purple">+</span>
                                <p class="dtr-count-text">Downloads</p>
                            </div>
                        </div>
                        <!-- counter ends -->

                    </div>
                    <!-- column 2 ends -->

                    <!-- column 3 starts -->
                    <div class="col-12 col-md-4 dtr-py-50">

                        <!-- counter starts -->
                        <div class="dtr-counter"> <i class="icon-user-circle-gear-fill color-blue"></i>
                            <div><span class="dtr-counter-number counting-number color-blue" data-from="1" data-to="82" data-speed="1600">82</span> <span class="dtr-counter-suffix color-light-purple">%</span>
                                <p class="dtr-count-text">Active Users</p>
                            </div>
                        </div>
                        <!-- counter ends -->

                    </div>
                    <!-- column 3 ends -->

                </div>
                <!--== row ends ==-->

                <!--== video starts ==-->
                <div class="dtr-video-box dtr-rounded overflow-hidden dtr-mt-100">

                    <!-- overlay -->
                    <div class="dtr-overlay"></div>

                    <!-- image -->
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/video-bg.jpg" alt="image">

                    <!-- pulsating button starts -->
                    <div class="dtr-video-pulse-wrapper dtr-overlay-content">
                        <div class="dtr-video-pulse pulse-blue">
                            <div class="pulse pulse-1"></div>
                            <div class="pulse pulse-2"></div>
                            <div class="pulse pulse-3"></div>
                            <!-- video link -->
                            <a class="dtr-video-popup dtr-video-button vbox-item" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=kuceVNBTJio"></a> </div>
                    </div>
                    <!-- pulsating button ends -->

                </div>
                <!--== video ends ==-->

            </div>
        </section>
        <!-- section ends
================================================== -->

        <!-- pricing section starts
================================================== -->
        <section id="pricing" class="dtr-section dtr-py-100">
            <div class="container">

                <?php get_template_part('template_parts/content', 'pricing') ?>

            </div>
        </section>
        <!-- pricing section ends
================================================== -->

        <!-- accordion section starts
================================================== -->
        <section class="dtr-section dtr-py-100 bg-white">
            <div class="container">

            <?php get_template_part('template_parts/content', 'faq') ?>
                
            </div>
        </section>
        <!-- accordion section ends
================================================== -->

        <!-- screenshot section starts
================================================== -->
        <section class="dtr-section dtr-section-with-bg dtr-py-100" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/section-bg-img2.jpg);">

            <!--overlay -->
            <div class="dtr-overlay dtr-overlay-dark"></div>

            <!-- content on overlay starts -->
            <div class="container-fluid dtr-overlay-content">

                <!-- heading starts -->
                <div class="dtr-section-intro dtr-dark-bg-intro text-center">
                    <div class="dtr-intro-subheading-wrapper">
                        <p class="dtr-intro-subheading">UI Blocks</p>
                    </div>
                    <h2 class="dtr-intro-heading">The Screenshots</h2>
                    <p class="dtr-intro-content">There are many variations of passages of lorem ipsum available<br>
                        but the majority have suffered alteration.</p>
                </div>
                <!-- heading ends -->

                <!-- slider starts -->
                <div class="dtr-slick-slider dtr-slider-3col dtr-slick-has-dots dtr-mt-50">
                    <!-- img 1 -->
                    <div> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/carousel-img1.png" alt="image"> </div>
                    <!-- img 2 -->
                    <div> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/carousel-img2.png" alt="image"> </div>
                    <!-- img 3 -->
                    <div> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/carousel-img3.png" alt="image"> </div>
                    <!-- img 4 -->
                    <div> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/carousel-img1.png" alt="image"> </div>
                    <!-- img 5 -->
                    <div> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/carousel-img2.png" alt="image"> </div>
                </div>
                <!-- slider ends -->

            </div>
            <!-- content on overlay ends -->

        </section>
        <!-- screenshot section ends
================================================== -->

        <!-- blog section starts
================================================== -->
        <section id="blog" class="dtr-section dtr-py-100 bg-white">
            <div class="container">

                <?php get_template_part('template_parts/content', 'blogs') ?>

            </div>
        </section>
        <!-- blog section ends
================================================== -->

        <!-- contact section starts
================================================== -->
        <section id="contact" class="dtr-section dtr-py-100">
            <div class="container">

                <?php get_template_part('template_parts/content', 'contact'); ?>

            </div>
        </section>
        <!-- contact section ends
================================================== -->

    </div>
    <!-- == main content area ends == -->

<?php get_footer(); ?>