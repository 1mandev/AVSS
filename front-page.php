<?php get_header(); ?>

<!-- banner -->
<?php get_template_part('template-parts/home', 'hero'); ?>

<!-- main -->
<div class="main">

    <!-- avss-intro -->
    <section class="avss-intro mx-auto container d-md-flex align-items-md-center px-4 py-5">
        <figure class="avss-intro__logo d-flex justify-content-center align-items-center py-3 py-md-0">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/avss.png'; ?>" class="img-fluid" alt="Responsive image" />
        </figure>
        <div class="avss-intro__description pt-4 pt-md-0">
            <div class="avss-intro__heading text-md-left text-center">
                <h4>trusted by over 70000+ customers over the country</h4>
            </div>
            <div class="avss-intro__comments mx-auto mx-md-0 pt-md-2 pt-3  text-justify ">
                Vehicle security is one of the most concerned issues of our country. In the year 2017, for solving this problem AVSS introduces different types of vehicle security system products in the market. With times and efforts, we are growing so fast than any other platform and successfully able to gain the trust of over 70000+ customers. AVSS is now the country's no # 1 vehicle security system services provider.
            </div>
        </div>
    </section>

    <!-- avss-devices -->
    <?php get_template_part('template-parts/home', 'devices'); ?>

    <!-- avss-features -->
    <?php get_template_part('template-parts/home', 'features'); ?>

    <!-- avss-products -->
    <?php get_template_part('template-parts/home', 'devicesinfo'); ?>

    <!-- avss-howitworks -->
    <section class="avss-how" id="video">
        <div class="row mx-auto">
            <div class="col-md-8 mx-auto">
                <div class="avss-section-intro text-center">
                    <h1 class="avss-section-intro__header">
                        how it works
                    </h1>
                    <div class="line-small mx-auto my-4"></div>
                    <div class="avss-section-intro__description mx-auto">
                        This demo video will show you our product features and how our device works with your vehicles. However, more information about setting up the devices will be found on the manual book provided with the packages.
                    </div>
                </div>
            </div>
        </div>

        <!-- how-video -->
        <div class="avss-how__main">
            <div class="avss-how__overlay">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/how-to/video-button.png'; ?>" class="img-fluid avss-how__playbtn" alt="paly-button" data-toggle="modal" data-src="https://www.youtube.com/embed/-Rg4fz9UCaA" data-target="#videomodal" />
                <div class="pulse-wave__one"></div>
                <div class="pulse-wave__two"></div>
            </div>
            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                <source src="<?php echo get_template_directory_uri() . '/assets/img/how-to/vid.mp4'; ?>" type="video/mp4" />
            </video>
        </div>
    </section>

    <!-- avss-app -->
    <?php get_template_part('template-parts/home', 'appinfo'); ?>

    <!-- avss-testimonial -->
    <?php get_template_part('template-parts/home', 'testimonials'); ?>

    <!-- avss-client -->
    <?php get_template_part('template-parts/home', 'clients'); ?>

    <!-- avss-footerbg -->
    <section class="avss-footerbg">
        <div class="avss-footerbg__main">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/footer-animation/car-2.svg'; ?>" class="img-fluid avss-footerbg__car--one" alt="app-image" />
            <img src="<?php echo get_template_directory_uri() . '/assets/img/footer-animation/bike-2.svg'; ?>" class="img-fluid avss-footerbg__car--two" alt="app-image" />
        </div>
    </section>
    <!-- end of avss-footerbg -->
</div>

<!-- Video Modal -->
<div class="modal fade" id="videomodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body modal-body-custom">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-Rg4fz9UCaA" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>