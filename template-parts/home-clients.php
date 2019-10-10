<section class="avss-client mt-4 mt-lg-0" id="clients">
    <div class="row mx-auto">
        <div class="col-md-8 mx-auto">
            <div class="avss-section-intro text-center">
                <h1 class="avss-section-intro__header">
                    our top clients
                </h1>
                <div class="line-small mx-auto my-4"></div>
                <div class="avss-section-intro__description mx-auto">
                The number of our clients and customers is growing day by day as we are reaching throughout the country with our fast-class products and services. 
                </div>
            </div>
        </div>
    </div>

    <!-- avss-client__main -->
    <div class="container">
        <div class="avss-client__main">
            <div class="row justify-content-center">

                <?php
                $clients = new WP_Query(
                    array(
                        'post_type' => 'clients',
                        'posts_per_page' => 9,
                    )
                );

                while ($clients->have_posts()) : $clients->the_post();
                    ?>

                    <div class="col-lg-3 col-8 col-sm-5 avss-client__item text-center">
                        <a href="<?php echo get_field('client_url') ?>">
                            <img src="<?php echo get_field('client_img') ?>" class="img-fluid avss-client__item--img" alt="app-image" />
                        </a>
                    </div>

                <?php endwhile;
                wp_reset_query(); ?>

            </div>
        </div>
    </div>
    <!-- end of avss-client__main -->

    <div class="contact-button text-center mt-5 mb-2">
        <a href="<?php echo site_url('/dealers'); ?>" class="btn-custom btn-primary-custom btn-lg-custom box-shadow-btn">
            See Our Dealers <i class="btn-ic icon ion-md-arrow-forward"></i>
        </a>
    </div>
</section>