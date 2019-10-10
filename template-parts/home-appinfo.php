<section class="avss-app" id="appinfo">
    <div class="row mx-auto">
        <div class="col-md-8 mx-auto">
            <div class="avss-section-intro text-center">
                <h1 class="avss-section-intro__header">
                    we shipped with apps
                </h1>
                <div class="line-small mx-auto my-4"></div>
                <div class="avss-section-intro__description mx-auto">
                Every device is bundled with the companion FREE smartphone application. With our Mobile Apps, the AVSS Devices can be controlled easily.
                </div>
            </div>
        </div>
    </div>
    <?php
    $appinfo = new WP_Query(
        array(
            'post_type' => 'appinfo',
            'posts_per_page' => 1,
        )
    );

    while ($appinfo->have_posts()) : $appinfo->the_post();
        ?>

        <!-- avss-app-main -->
        <div class="row mx-auto align-items-center justify-content-center">
            <div class="col-lg-6 col-lg-6-custom">
                <figure class="avss-app__main--img d-flex justify-content-center">
                    <img src="<?php echo get_field('app_img'); ?>" class="img-fluid" alt="app-image" />
                </figure>
            </div>
            <div class="col-lg-6 col-lg-6-custom col-md-9 col-sm-10 col-11">
                <div class="avss-product__main--content p-5">
                    <h3 class="avss-product__main--heading pb-4 pl-lg-2">
                        app features
                    </h3>
                    <ul class="avss-product__main--list my-5 pl-lg-2">
                        <li class="mb-3">
                            <?php the_field('app_feature_1') ; ?>
                        </li>
                        <li class="mb-3">
                            <?php the_field('app_feature_2') ; ?>
                        </li>
                        <li class="mb-3">
                            <?php the_field('app_feature_3') ; ?>
                        </li>
                        <li class="mb-3">
                            <?php the_field('app_feature_4') ; ?>
                        </li>
                        <li class="mb-3">
                            <?php the_field('app_feature_5') ; ?>
                        </li>
                    </ul>

                    <h4 class=" p-2 text-dark">
                        Download Now
                    </h4>
                    <div class="avss-app__main--market d-flex pl-lg-2 pt-4">
                        <a target="_blank" href="<?php echo get_field('app_playstore'); ?>" class="mr-4 d-flex">
                            <img src="<?php echo get_template_directory_uri().'/assets/img/app-sec/play-store.png'; ?>" class="img-fluid" alt="play-store" />
                        </a>
                        <a target="_blank" href="<?php echo get_field('app_appstore'); ?>" class="d-flex"><img src="<?php echo get_template_directory_uri().'/assets/img/app-sec/app-store.png'; ?>" class="img-fluid" alt="app-store" /></a>
                    </div>
                </div>
                <!-- avss-product__main -->
            </div>
        </div>

    <?php endwhile;
    wp_reset_query(); ?>
</section>