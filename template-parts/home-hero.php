<div class="hero-sec">
    <div class="banner text-center">
        <h3 class="banner-header text-light-custom font-weight-bolder mt-3 mt-sm-4 mt-md-1 mt-lg-2">
            track all your vechicles with avss
        </h3>
        <figure class="banner-image mt-5 mt-sm-4 pt-2 pt-lg-1">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/hero.gif'; ?>" class="img-fluid image-fluid-custom" alt="image" />
        </figure>

        <div class="banner-features text-center w-75 mx-auto d-flex justify-content-center  mt-3 mt-md-0">

            <?php
            $products = new WP_Query(
                array(
                    'post_type' => 'products',
                    'posts_per_page' => -1,
                    'order' => 'ASC'
                )
            );
            while ($products->have_posts()) : $products->the_post();

                ?>
                <p class="banner-features-item px-4 mt-3">
                    <?php the_field('product_name'); ?>
                </p>
            <?php endwhile;
            wp_reset_query(); ?>


        </div>

        <!-- line -->
        <div class="line-big mx-auto"></div>

        <!-- banner-text -->
        <div class="banner-text mx-auto text-center mt-4 mt-lg-3">
        Country's number #1 trusted brand for vehicle security system. We produce the high quality security system products for your vehicles with a whole lot of smart features built into the devices.
        </div>

        <!-- banner-button -->
        <div class="banner-button mt-4 pb-lg-4">
            <a href="<?php echo site_url('/#devices'); ?>" class="btn-custom btn-secondary-custom btn-lg-custom box-shadow-btn mt-5 mt-md-0" style="font-size: .8rem;">

                see devices <i class="btn-ic icon ion-md-arrow-forward"></i>
            </a>
        </div>
    </div>
</div>