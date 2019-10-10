<section class="avss-features container-fluid" id="features">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="avss-section-intro text-center">
                <h1 class="avss-section-intro__header">
                    Smart Features
                </h1>
                <div class="line-small mx-auto my-4"></div>
                <div class="avss-section-intro__description mx-auto">
                AVSS does not only provide products that just work fine but also, we offer whole lots of smart features with every device we build.
                </div>
            </div>
        </div>
    </div>

    <div class="avss-features__box container-fluid">
        <div class="row justify-content-between">

            <?php
            $features = new WP_Query(
                array(
                    'post_type' => 'features',
                    'posts_per_page' => 12,
                    'order' => 'ASC'
                )
            );

            while ($features->have_posts()) : $features->the_post();
                ?>

                <div class="col-12 col-lg-4 col-md-6 col-lg-4-custom mb-5 d-flex flex-column flex-md-row">
                    <div class="avss-features__item text-center bg-white">
                        <div class="avss-features__item--img mb-md-4 mb-3">
                            <img src="<?php echo get_field('feature_img') ?>" class="img-fluid" alt="image" />
                        </div>
                        <h4 class="avss-features__item--header pt-3 pb-2">
                            <?php the_field('feature_title'); ?>
                        </h4>
                        <div class="avss-features__item--details">
                            <p><?php the_field('feature_info'); ?></p>
                        </div>
                    </div>
                </div>

            <?php endwhile;
            wp_reset_query(); ?>
            
        </div>
    </div>
    <!-- end of avss-features__box -->

    <div class="contact-button text-center mt-5 mb-2">
        <a href="<?php echo site_url('/#appinfo'); ?>" class="btn-custom btn-primary-custom btn-lg-custom box-shadow-btn">
            Download Apps <i class="btn-ic icon ion-md-arrow-forward"></i>
        </a>
    </div>
</section>