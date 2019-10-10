<?php get_header(); ?>
<main class="dealer-main">
    <section class="page-header text-center">
        <div class="container">
            <div class="page-banner">
                <i class="icon ion-md-business page-header__icon"></i>
                <h1 class="page-header__title">Dealers</h1>
                <p class="page-header__text">our trusted dealers</p>
            </div>
        </div>
    </section>

    <!-- dealer -->
    <section class="dealer">
        <div class="row mx-auto">
            <div class="col-md-8 mx-auto">
                <div class="avss-section-intro text-center">
                    <h1 class="avss-section-intro__header">
                        FIND YOUR NEAREST dealer
                    </h1>
                    <div class="line-small mx-auto my-4"></div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <?php
                    $dealers = new WP_Query(
                        array(
                            'post_type' => 'dealers',
                            'posts_per_page' => -1,
                        )
                    );
                    while ($dealers->have_posts()) : $dealers->the_post();
                ?>
                    <div class="col-md-4 pb-5">
                        <div class="card h-100 card-custom">
                            <div class="card-body text-center">
                                <div class="product__view">
                                    <div class="product__view--icon">
                                        <i class="icon ion-md-pin"></i>
                                    </div>
                                    <h3 class="avss-devices__device--title title-big my-4 pt-1">
                                        <?php the_field('dealer_title'); ?>
                                    </h3>
                                </div>
                                <p class="avss-devices__description text-center pb-3 px-sm-3 px-md-0">
                                    <p>
                                        <?php the_field('dealer_address'); ?>
                                    </p>
                                    <a href="phone:<?php echo get_field('dealer_phone_num_1') ?>" class="font-weight-bold"><?php the_field('dealer_phone_num_1'); ?></a>
                                    <br>
                                    <a href="phone:<?php echo get_field('dealer_phone_num_2') ?>" class="font-weight-bold d-block pt-2"><?php the_field('dealer_phone_num_2'); ?></a>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_query(); ?>
            </div>
        </div>

        <div class="contact-button text-center mt-5">
            <a href="<?php echo site_url('/contact'); ?>" class="btn-custom btn-primary-custom btn-lg-custom box-shadow-btn">
                contact for dealership <i class="btn-ic icon ion-md-arrow-forward"></i>
            </a>
        </div>
    </section>
</main>

<?php get_footer(); ?>